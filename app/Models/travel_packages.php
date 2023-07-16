<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class travel_packages extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event',
        'language','foods','departure_date','duration',
        'type', 'price'
    ];

    public function galleries(){
        return $this->hasMany(galleries::class, 'travel_packages_id', 'id');
    }
}
