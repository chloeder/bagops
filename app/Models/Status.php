<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory, HasSlug;


    protected $table = 'status';

    protected $fillable = ['nama', 'slug'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('nama')
            ->saveSlugsTo('slug');
    }

    public function data()
    {
        return $this->hasMany(Data::class);
    }
}
