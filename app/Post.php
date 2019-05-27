<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Model
    protected $table = 'posts';
    //Primary Key
    public $primarykey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
    
}
