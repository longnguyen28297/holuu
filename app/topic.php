<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class topic extends Model
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
                'source' => 'title'
            ]
        ];
    }

    protected $table= 'topic';
    protected $fillable= [
    	'id','id_index','id_city','censor','creator','title','images','content','views','status','slug','created_at','updated_at','summary','keyword'
    ];
    protected function fullTextWildcards($term)
   {
       // removing symbols used by MySQL
       $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
       $term = str_replace($reservedSymbols, '', $term);

       $words = explode(' ', $term);

       foreach ($words as $key => $word) {
           /*
            * applying + operator (required word) only big words
            * because smaller ones are not indexed by mysql
            */
           if (strlen($word) >= 1) {
               $words[$key] = '+' . $word  . '*';
           }
       }
       
       $searchTerm = implode(' ', $words);

       return $searchTerm;
   }
}
