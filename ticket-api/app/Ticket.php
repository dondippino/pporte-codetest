<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {

    
    //
    public function ticketType() {
        return $this->belongsTo('App\TicketType','ticke_type_id');
    }

}
