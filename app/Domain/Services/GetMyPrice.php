<?php

namespace App\Domain\Services;

use App\Domain\Models\User;

/**
 * We need to insert 1 or 0 records to our Winnings table for that user_id.
 * We better avoid race conditions, so ein maliciuos hacker will not brute us multitimes.
 */
class GetMyPrice
{
    /**
     * User hitted 'get my price!' button (in a while loop from console), we need to process!
     * we not giving 2nd chances. So if forgotten his price once, give nothin this time.
     */
    public function exec(User $user)
    {
        
    }
}
