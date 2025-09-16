<?php

namespace Dpb\Packages\Finance\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnitRate extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'date_from',
        'date_to',
        'unit_price',
        'unit_id',
        'currency_id',
    ];

    public function getTable()
    {
        return config('pkg-finance.table_prefix') . 'unit_rates';
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'date_from' => 'date',
            'time_to' => 'date',
        ];
    }

    public function rateable(): MorphTo
    {
        return $this->morphTo();
    }    
}
