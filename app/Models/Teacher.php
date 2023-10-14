<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'name', 'phone_number', 'date_of_birth', 'gender', 'address', 'photo'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'teacher_id');
    }
}
