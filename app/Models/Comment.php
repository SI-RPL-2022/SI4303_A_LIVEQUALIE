<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    public function userc(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}
