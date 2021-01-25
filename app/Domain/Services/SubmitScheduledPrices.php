<?php

namespace App\Domain\Services;

/**
 * Submit scheduled prices, after some manual moderations, validations, company bills possibilities and so
 */

class SubmitScheduledPrices
{
    /**
     * reading winnings table, 
     * collect moderated (not sent yet), 
     * process them. One by one, or bunches.
     * Somehow be confident with the amount of Cash in our table and in our Bank 
     * (how often they syncronized btw ? Do we have overdrafts ? How far could go below zero ? 
     * How much transactions so remain unsuspicious even if always positive balance ? 
     * What if there were too much cach returns ? How much is 'too much' ?)
     */
    public function exec() 
    {
    
    }
}
