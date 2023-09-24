<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $primaryKey = 'task_id';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'description',
        'data',
        'status',
        'user_id',
    ];
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
