<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'provider';

        /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public $timestamps = false;

}
