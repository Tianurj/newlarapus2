<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowLog extends Model
{
    //
    public function book()
    {
    	return $this->belongsTo('App\Book');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
