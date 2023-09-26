<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'VehicleTypes';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
<<<<<<< HEAD
=======

    
>>>>>>> 19e9e66646a91409613124e47d6a4c8a1b554d3f
    public $timestamps = false;
}
