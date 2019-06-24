<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','body','category','image','remarks'];
    public function categories()
    {
        return $this->belongsTo('Modules\Blog\Entities\Category','category');
    }
}
