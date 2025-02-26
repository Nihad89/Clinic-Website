<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    use HasFactory;

 
    protected $fillable = [
        'notice_id',
        'des_a',
        'des_b',
        'deleted_by',
        'deleted_at',
    ];

    // Define relationships
    public function notice()
    {
        return $this->belongsTo(Notice::class, 'notice_id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
    
}