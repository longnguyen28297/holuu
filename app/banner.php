<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class banner extends Model
{

    protected $table= 'banner';
    protected $fillable= [
    	'id','images','created_at','updated_at'
    ];
}
