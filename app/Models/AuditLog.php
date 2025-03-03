<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; 

class AuditLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'notice_id', 'des_a', 'des_b', 'deleted_by', 'deleted_at'
    ];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
}