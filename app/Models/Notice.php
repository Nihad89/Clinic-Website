<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notices';
    protected $fillable = [
        'des_a',
        'des_b',
        'deleted_by'
    ];
    
    public function deletedByAdmin()
{
    return $this->belongsTo(User::class, 'deleted_by');
}

}
