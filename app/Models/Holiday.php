<?php

namespace App\Models;


use App\Models\HolidayCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Holiday extends Model
{
    use HasFactory;

    protected $table = 'holidays';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'days',
        'itinerary',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'navbar_status',
        'status',
        'created_by'
    ];
  
  
    public function holidaycategory()
{
    return $this->belongsTo(HolidayCategory::class, 'category_id', 'id');
}
public function user()
{
    return $this->belongsTo(User::class, 'created_by', 'id');
}

}
