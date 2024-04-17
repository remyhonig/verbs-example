<?php

namespace App\States;

use Carbon\CarbonInterface;
use Thunk\Verbs\State;

class ApplicationState extends State
{
    public int $counter = 0;

    public ?CarbonInterface $updated_at = null;
}
