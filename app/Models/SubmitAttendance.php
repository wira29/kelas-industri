<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubmitAttendance extends Model
{
    use HasFactory;

    protected $guarded  = [];

    public function student(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}