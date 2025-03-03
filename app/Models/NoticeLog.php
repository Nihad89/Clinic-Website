<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeLog extends Model
{
    use HasFactory;

    protected $table = 'notice_logs';

    protected $fillable = [
        'notice_id', 
        'des_a', 
        'des_b',
        'created_by',
        'deleted_by', 
        'deleted_at',
    ];

    protected $dates = ['deleted_at'];

        // Relationship to the notice
        public function notice()
        {
            return $this->belongsTo(Notice::class, 'notice_id');
        }

    // Relationship to get the user who created the notice
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relationship to get the user who deleted the notice
    public function deleter()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
}