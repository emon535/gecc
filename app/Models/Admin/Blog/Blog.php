<?php

namespace App\Models\Admin\Blog;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';

    protected $fillable = [
        'title', 'slug', 'image', 'description', 'status', 'created_by', 'updated_by'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $slug = Str::slug($model->title);
            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            // if other slugs exist that are the same, append the count to the slug
            $model->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }
}