<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='categories';
    protected $primaryKey='cat_id';

    public function setCategoryNameAttribute($value){
          $this->attributes['category_name']=ucwords($value);
   }
   public function getCategoryNameAttribute($v){
   return strtoupper($v);
   }
}
 