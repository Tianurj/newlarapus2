<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Author extends Model
{
    //
    protected $fillable=['name'];

    public function books(){
    	return $this->hasMany('App\Book');

    }

    public static function boot()
    {
    	parent::boot();
    	self::deleting(function($author){
    		if($author->books->count()>0){
    			$html='Penulis Tidak Bisa Dihapus Karena Masih Memiliki Buku:';
    			$html.='<ul>';
    			foreach ($author->books as $book) {
    				# code...
    				$html.="<li>$book->title</li>";
    			}
    			$html.='</ul>';

    			Session::flash("flash_notification",[
    				"level"=>"danger",
    				"message"=>$html
    				]);
    			return false;
    		}
    	});
    }
}
