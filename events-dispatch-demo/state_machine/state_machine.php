<?php
require_once './event_dispatcher.php';
class StateMachine
{
   public function transitionTo($state)
   {
        try {
           $eventDispatcher=new EventDispatcher();

            $eventDispatcher->dispatch('state.change', ['from' => $fromState, 'to' => $toState]);
        } catch (Exception $e) {
            $this->rollback();
        }
   }
}