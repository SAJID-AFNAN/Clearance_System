<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TimeTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'period',
        'subject_id'
    ];

    public function subject(): BelongsTo
    {
        return $this->BelongsTo(subject::class);
    }
}
