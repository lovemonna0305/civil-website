<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    public function photos()
    {
        return $this->hasMany('\App\Models\ProjectPhotos', 'project_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo('\App\Models\Brands', 'brand_id');
    }
    
    public function category()
    {
        return $this->belongsTo('\App\Models\Categorys', 'category_id');
    }
    public function testimonial()
    {
        return $this->belongsTo('\App\Models\HomeTestimonials', 'testimonial_id');
    }
}
