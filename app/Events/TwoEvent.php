<?php

namespace App\Events;

use App\States\ApplicationState;
use Thunk\Verbs\Attributes\Autodiscovery\StateId;
use Thunk\Verbs\Event;

class TwoEvent extends Event
{
    #[StateId(ApplicationState::class)]
    public ?int $application_id = null;

    public function apply(ApplicationState $state)
    {
        $state->counter--;
    }
}
