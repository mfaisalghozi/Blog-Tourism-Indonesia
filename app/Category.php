<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Get the every articles into each category.
     */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }
}   
