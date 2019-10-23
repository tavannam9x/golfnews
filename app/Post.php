<?php
namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Post extends Eloquent {
	
    protected $collection = 'posts';
    
    protected $fillable = [
        'title', 'slug','post_format'
    ];


}