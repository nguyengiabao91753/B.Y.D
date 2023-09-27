<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
        /**
     * The table asociated with the model .
     *
     * @var string
     */
    protected $table = 'payment';
    /**
     * The attributes that aren't mass asignable .
     * @var array
     */
    protected $guarded = [];
    protected $primaryKey = 'payment_id';
    public $timestamps = false;
}
