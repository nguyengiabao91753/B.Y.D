<?php

namespace App\Models;

use App\Models\Admin\Insurance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function insurance():BelongsTo
    {
        return $this->belongsTo(Insurance::class);
    }
}

