<?php

namespace App\Events;

use App\States\ApplicationState;
use Thunk\Verbs\Attributes\Autodiscovery\AppliesToSingletonState;
use Thunk\Verbs\Event;

#[AppliesToSingletonState(ApplicationState::class)]
class TwoEvent extends Event
{
    public function handle(ApplicationState $state)
    {
        $state->counter--;
    }
}
