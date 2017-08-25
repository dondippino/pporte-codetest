<?php

require_once 'event_dispatcher.interface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of third_party_event
 *
 * @author oladipo
 */
class EventDispatcher implements EventDispatcherInterface {

    public function dispatch($eventName, array $parameters = array()) {
        // implement event dispatch here
    }

    public function on($eventName, $calllable) {
       // implement callback for event here
    }

}
