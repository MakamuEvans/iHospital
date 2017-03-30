<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients;
use Illuminate\Support\Facades\Response;

class TicketController extends Controller
{


    public function add_form(){
        $title = 'iHospital | Create New Ticket';
        $rightbar = 'ticket';

        return view('ticket.add', compact('rightbar', 'title'));
    }

    public function searchClient(Request $request){
        $search_term = $request->term;

        $results = Clients::where('first_name', 'LIKE', '%'.$search_term.'%')
            ->orwhere('other_names', 'LIKE', '%'.$search_term.'%')
            ->orwhere('id_number', 'LIKE', '%'.$search_term.'%')
            ->get();

        return Response::json($results);
    }
}
