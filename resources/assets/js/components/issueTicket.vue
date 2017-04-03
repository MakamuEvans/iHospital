<template xmlns:v-bind="http://www.w3.org/1999/xhtml">
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default myTicket">
                <div class="panel-heading"><b>New Clients (Issued Ticket Stage)</b></div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered dt-responsive" id="dataTable"
                           cellspacing="0" width="100%" style="font-size: 10px">
                        <thead>
                        <tr>
                            <th>Client</th>
                            <th>Progress</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Makamu</td>
                            <td>Issues Ticket</td>
                            <td><a @click="openTicket">Open</a> </td>
                        </tr>
                        <tr>
                            <td>Makamu</td>
                            <td>Issues Ticket</td>
                            <td><a href="">Open</a> </td>
                        </tr>
                        <tr>
                            <td>Makamu</td>
                            <td>Issues Ticket</td>
                            <td><a href="">Open</a> </td>
                        </tr>
                        <tr>
                            <td>Makamu</td>
                            <td>Issues Ticket</td>
                            <td><a href="">Open</a> </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel panel-default myTicket">
                <div class="panel-heading"><b>Lab Clients (Issued Lab Ticket)</b></div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>

            <div class="panel panel-default myTicket">
                <div class="panel-heading"><b>Chemist Clients(Issued Chemist Ticket)</b></div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>My List</strong> <br>
                It is Highly recommended you follow the list as is.<br>
            </div>

            <div class="row">
                <table class="table table-striped table-bordered dt-responsive" id=""
                       cellspacing="0" width="100%" style="font-size: 10px">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Progress</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody v-for="allActive in allActives">
                    <tr>
                        <td>{{ allActive.client_id}}</td>
                        <td>{{ allActive.updated_at}}</td>
                        <td><a @click="openTicket(allActive.id)">Open</a> </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <transition name="modal">
            <div class="modal-mask" v-show="ticketModal">
                <div class="modal-wrapper">
                    <div class="modal-container">

                        <!--<div class="modal-header">
                            <slot name="header">
                                default header
                            </slot>
                        </div>-->

                        <div class="modal-body">
                            <slot name="body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <img src="https://placehold.it/140x100" style="width: 100%; height: auto">
                                        </div>
                                        <div class="row">
                                            <h5>
                                                <p>Client Name:</p>
                                                <p>Client Type:</p>
                                                <p>Year of Birth:</p>
                                                <p>{{currentTicket.updated_at}}</p>
                                            </h5>
                                        </div>

                                    </div>
                                    <div class="col-md-8">
                                        <div class="row" style="max-height: 450px;overflow-y: scroll">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="#progress">Ticket</a></li>
                                                <li><a data-toggle="tab" href="#history"> History</a></li>
                                            </ul>

                                            <div class="row tab-content" >
                                                <div id="progress" class="tab-pane fade in active">
                                                    <h1>Progress</h1>
                                                    <div class="accordion">
                                                        <div class="accordion-section">
                                                            <a class="accordion-section-title" href="#accordion-1">Assigned a Ticket <b style="color: white;background-color: green;border-radius: 5px;margin-left: 10px;padding-left: 3px;padding-right: 3px">Done</b></i></a>
                                                            <div id="accordion-1" class="accordion-section-content">
                                                                <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</p>
                                                            </div><!--end .accordion-section-content-->
                                                        </div><!--end .accordion-section-->

                                                        <div class="accordion-section">
                                                            <a class="accordion-section-title" href="#accordion-2">Seen Doctor/Nurse</a>
                                                            <div id="accordion-2" class="accordion-section-content">
                                                                <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</p>
                                                            </div><!--end .accordion-section-content-->
                                                        </div><!--end .accordion-section-->

                                                        <div class="accordion-section">
                                                            <a class="accordion-section-title" href="#accordion-3">Seen a Lab Technician</a>
                                                            <div id="accordion-3" class="accordion-section-content">
                                                                <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</p>
                                                            </div><!--end .accordion-section-content-->
                                                        </div>
                                                        <div class="accordion-section">
                                                            <a class="accordion-section-title" href="#accordion-4">Seen Chemist</a>
                                                            <div id="accordion-4" class="accordion-section-content">
                                                                <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</p>
                                                            </div><!--end .accordion-section-content-->
                                                        </div><!--end .accordion-section-->
                                                    </div><!--end .accordion-->
                                                </div>

                                                <div id="history" class="tab-pane fade">
                                                    <h1>History</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </slot>
                        </div>

                        <div class="modal-footer">
                            <slot name="footer">

                                <button class="modal-default-button" @click="closeTicket">
                                    Close
                                </button>
                            </slot>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        mounted: function() {
            console.log('Component mounted.')
            this.allActiveMethod()
        },
        data: function () {
            return{
                ticketModal: false,
                allActives: [],
                currentTicket: []
            }
        },
        methods:{
            openTicket: function (ticketid) {
                var inheritance = this
                console.log(ticketid);
                axios.get(base_url+'/tickets/my-tickets/'+ticketid)
                    .then(function (response) {
                        inheritance.currentTicket = response.data;
                    }.bind(this))
                inheritance.ticketModal = true;
            },
            closeTicket: function () {
                var inheritance=this
                inheritance.ticketModal=false;
            },
            allActiveMethod: function () {
                var inheritance = this
                axios.get(base_url+'/tickets/my-tickets/all-active')
                    .then(function (response) {
                        inheritance.allActives = response.data;
                    }.bind(this))
            }

        }
    }
</script>
