<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name','phone','email','company','address','assigned_to'];

    public function assignedUser()
    {
        return $this->belongsTo(User::class,'assigned_to');
    }

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }

    public function tasks()
    {
        return $this->morphMany(Task::class,'related');
    }

    public function notes()
    {
        return $this->morphMany(Note::class,'related');
    }
}
