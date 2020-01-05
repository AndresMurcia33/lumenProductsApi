<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClotheByUser extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //atributos de asignación masiva 
    protected $fillable = [
        'name',
        'state',
        'stock',
        'clothes_categories_id',
        'clothing_size_id',
        'clothing_brand_id'
    ];

}
