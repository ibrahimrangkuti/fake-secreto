<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name'];

    public function message()
    {
        return $this->hasMany(Message::class);
    }
}
