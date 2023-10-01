<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
        /**
     * The table asociated with the model .
     *
     * @var string
     */
    protected $table = 'contracts';
    /**
     * The attributes that aren't mass asignable .
     * @var array
     */
    protected $guarded = [];
    protected $primaryKey = 'id';
}

