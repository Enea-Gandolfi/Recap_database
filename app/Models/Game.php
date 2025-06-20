<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable=['title','cover','publisher','year','user_id','plot'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
}
