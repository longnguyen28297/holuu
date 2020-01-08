<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class indexing extends Model
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
        protected $table= 'indexing';
    protected $fillable= [
    	'id','id_tags','name','slug','created_at','updated_at'
    ];
}
