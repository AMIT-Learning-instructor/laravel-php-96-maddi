<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // protected $primaryKey = 'name';
    protected $fillable = [
        'name','parent_category_id','description'
    ];

    public function parentCategory(){
        return $this->belongsTo(Category::class,'parent_category_id','id');
    }
}
