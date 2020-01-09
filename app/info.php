<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class info extends Model
{
    //
     use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    protected $table= 'info';
    protected $fillable= [
    	'id','name','address','logo','content','phone','email','fax','slug','created_at','updated_at','facebook'
    ];
}
