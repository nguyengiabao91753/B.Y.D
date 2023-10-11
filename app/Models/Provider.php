<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provider extends Model
{
    use HasFactory;
     /**

     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'providers';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function provider_image ():HasMany
    {
        return $this->hasMany(Provider::class);
    }
}
