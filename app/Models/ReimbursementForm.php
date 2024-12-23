<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ReimbursementForm extends Model
{
    protected $fillable =
    [
        'user_id',
        'title',
        'price',
        'documentation_needed',
        'before',
        'after',
        'documentation'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
