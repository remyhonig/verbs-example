<?php

namespace App\Events;

use App\States\ApplicationState;
use Thunk\Verbs\Attributes\Autodiscovery\StateId;
use Thunk\Verbs\Event;

class OneEvent extends Event
{
    #[StateId(ApplicationState::class)]
    public ?int $application_id = null;

    public function apply(ApplicationState $state)
    {
        $state->counter++;
        $state->updated_at = now();
    }
}
