<?php

namespace App\Models;

use Illuminate\Auth\Events\Failed;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

        /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
<<<<<<< HEAD
    protected $primaryKey = 'CustomerID';
    public $timestamps = false;

=======
    protected $primaryKey = 'customer_id';
    public $timestamps = false;


>>>>>>> 19e9e66646a91409613124e47d6a4c8a1b554d3f
}
