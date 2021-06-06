<?php

namespace App;

use App\Detail;
use App\Tag;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'text', 'tag_id'];
    public function tag() {
        return $this -> belongsTo(Tag::class);
    }
    public function detail(){
        return $this -> hasOne(Detail::class);
    }
}
