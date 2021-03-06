<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
   /**
     * Set auto-increment to false.
     *
     * @var bool
     */
    // public $incrementing = false;

    protected $table ="configs";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'value'
    ];

}
