<?php

namespace App\Models\Admin;

use App\Models\Category;
use App\Models\Policy;
use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Insurance extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'insurances';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function provider():BelongsTo
    {
        return $this->belongsTo(Provider::class);
    }

    public function policy():BelongsTo
    {
        return $this->belongsTo(Policy::class);
    }
}
