<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class banner_slider extends Model
{
 
    protected $table= 'banner_slider';
    protected $fillable= [
    	'id','images','created_at','updated_at'
    ];
}
