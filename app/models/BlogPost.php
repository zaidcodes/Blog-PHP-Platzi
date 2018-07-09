<?php

namespace app\models;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model{
    protected $table = 'blog_post';
    protected $fillable = ['title','content','created_by','image_Url'];
}