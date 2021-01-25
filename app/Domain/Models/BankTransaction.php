<?php

namespace App\Domain\Models;

/**
 * I assume, we log every money transfer we proceeded. To some table with a serialized json field. 
 * Because the banks and payment systems are so different...
 */
class BankTransaction extends Eloquent
{
    
}
