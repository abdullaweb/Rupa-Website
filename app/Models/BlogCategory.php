<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function blogDetails()
    {
        return $this->hasMany(BlogDetails::class, 'blog_category_id');
    }
}
