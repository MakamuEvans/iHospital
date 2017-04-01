<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Clients;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class TicketController extends Controller
{

    /**
     * display form where a user searches for client, to start a ticket for.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function add_form(){
        $title = 'iHospital | Create New Ticket';
        $rightbar = 'ticket';

        return view('ticket.add', compact('rightbar', 'title'));
    }

    /**
     * api method used by vue js to instantly search for a client.
     *
     * @param Request $request
     * @return mixed
     */
    public function searchClient(Request $request){
        $search_term = $request->term;

        $results = Clients::where('first_name', 'LIKE', '%'.$search_term.'%')
            ->orwhere('other_names', 'LIKE', '%'.$search_term.'%')
            ->orwhere('id_number', 'LIKE', '%'.$search_term.'%')
            ->get();

        return Response::json($results);
    }

    /**
     * display form where a client is assigned a given doctor/nurse
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function start_form(Request $request){
        $title = 'iHospital | Assign Ticket';
        $rightbar = 'ticket';

        $data = $request->all();
        $available_doctors = User::all();

        return view('ticket.start', compact('rightbar', 'title', 'data', 'available_doctors'));
    }

    public function start_store(Request $request){
        //issued by
        $request['issued_by'] = Auth::user()->id;
        //status -->default is open
        $request['status'] = 'open';

        //save ticket to db
        $ticket = new Ticket($request->all());
        $ticket->save();

        //return success message to page
        return redirect()->action('TicketController@add_form')
            ->with('status', 'Ticket Successfully created');

    }
}
