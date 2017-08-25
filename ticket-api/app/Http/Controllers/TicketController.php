<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Ticket;

class TicketController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
       return response(Ticket::all())->header('Content-Type', 'application/json');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {

        $ticket = new Ticket();
        $ticket->setAttribute("title", $request->get("title"));
        $ticket->setAttribute("description", $request->get("description"));
        $ticket->setAttribute("ticket_type_id", $request->get("ticket_type_id"));

        $ticket->save();
        return response(array("result" => 1))->header('Content-Type', 'application/json');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $ticket = Ticket::find($id);
        $ticket->setAttribute("title", $request->get("title"));
        $ticket->setAttribute("description", $request->get("description"));
        $ticket->setAttribute("ticket_type_id", $request->get("ticket_type_id"));

        $ticket->save();
        return response(array("result" => 1))->header('Content-Type', 'application/json');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
