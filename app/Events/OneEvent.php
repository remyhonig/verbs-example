<?php

namespace App\Events;

use App\States\ApplicationState;
use Thunk\Verbs\Attributes\Autodiscovery\AppliesToSingletonState;
use Thunk\Verbs\Event;

#[AppliesToSingletonState(ApplicationState::class)]
class OneEvent extends Event
{
    public function handle(ApplicationState $state)
    {
        $state->counter++;
    }
}
