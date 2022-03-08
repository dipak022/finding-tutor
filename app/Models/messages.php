<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
class messages extends Model
{
   // use HasFactory;


    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,'from');
    }
}
