<?php

namespace App\Models\Backend;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomePageSlider extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'banner_image',
        'tiny_title',
        'title',
        'description',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($homeSlider) {
            if (file_exists($homeSlider->banner_image))
                unlink($homeSlider->banner_image);
        });
    }

    public static function createOrUpdateHomePageSliders($request, $id = null)
    {
        HomePageSlider::updateOrCreate(['id' => $id], [
            'banner_image' => fileUpload($request->file('banner_image'), 'home-slider', 'slider', isset($id) ? static::find($id)->banner_image : null),
            'tiny_title' => $request->tiny_title,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status == 'on' ? 1 : 0,
        ] );
    }

    protected $searchableFields = ['*'];

    protected $table = 'home_page_sliders';
}
