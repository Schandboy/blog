<?php

namespace Modules\Contact\Entities;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['first_name','last_name','email','subject','message'];
}
