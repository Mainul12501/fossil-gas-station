<?php

namespace App\Models\Backend;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GasStation extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'gas_station_id',
        'key_people_id',
        'name',
        'overview',
        'sub_images',
        'office_address',
        'office_phone_number',
        'state',
        'state_id',
        'zip_code',
        'fb',
        'insta',
        'telegram',
        'linkedin',
        'skype',
        'whatsapp',
        'location_map',
        'status',
        'slug',
        'seo_header',
        'seo_footer',
        'logo',
        'main_image',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'gas_stations';

    public function gasStation()
    {
        return $this->belongsTo(GasStation::class);
    }

    public function gasStations()
    {
        return $this->hasMany(GasStation::class);
    }

    public function gasStationKeyPeople()
    {
        return $this->belongsTo(GasStationEmployee::class, 'key_people_id');
    }

    public function gasStationEmployees()
    {
        return $this->belongsToMany(GasStationEmployee::class);
    }
}
