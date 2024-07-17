<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'city',
        'description',
        'date',
        'items',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id', 'user');
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    protected function casts(): array
    {
        return [
            'date' => 'datetime',
            'items' => 'array'
        ];
    }
}