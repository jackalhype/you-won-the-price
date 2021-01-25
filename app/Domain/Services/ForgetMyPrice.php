<?php

namespace App\Domain\Services;

use App\Domain\Models\User;

/**
 * Easy part, user may forget his winning, we only need to record that. And he could not repeat winning procedure (until when?).
 */
class ForgetMyPrice
{
    public function exec(User $user)
    {
    }
}


