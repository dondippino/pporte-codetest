<?php

require_once './state_machine/event_dispatcher.php';

// Listen to events dispatched from State Machine
$eventDispatcher = new EventDispatcher();
$eventDispatcher->on('state.change', handleStateChange($parameters));

function handleStateChange($parameters) {
    // use $parameters 
}
