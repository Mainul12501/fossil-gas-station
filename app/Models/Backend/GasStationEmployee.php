<?php

namespace App\Models\Backend;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use function Termwind\parse;

class GasStationEmployee extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'profile_image',
        'fb',
        'whatsapp',
        'x',
        'linkedin',
        'status',
        'slug',
        'seo_header',
        'seo_footer',
        'overview',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'gas_station_employees';

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($employee) {
            if (!empty($employee->gasStationsKeyPeoples))
            {
                $employee->gasStationEmployeeRoles()->detach();
            }

            if (file_exists($employee->profile_image))
            {
                unlink($employee->profile_image);
            }
        });
    }

    public static function createOrUpdateGasStationEmployee($request, $id = null)
    {
        return static::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'profile_image' => fileUpload($request->file('profile_image'), 'employee', 'employee-', isset($id) ? static::find($id)->profile_image : null),
            'fb' => $request->fb,
            'whatsapp' => $request->whatsapp,
            'x' => $request->x,
            'linkedin' => $request->linkedin,
            'status' => $request->status == 'on' ? 1 : 0,
            'slug' => str_replace(' ', '-', $request->name).'-'.(!isset($id) ? static::latest()->first()->id+1 : static::find($id)->id),
            'seo_header' => $request->seo_header,
            'seo_footer' => $request->seo_footer,
            'overview' => $request->overview,
        ]);
    }

    public function gasStationsKeyPeoples()
    {
        return $this->hasMany(GasStation::class, 'key_people_id');
    }

    public function gasStations()
    {
        return $this->belongsToMany(GasStation::class);
    }

    public function gasStationEmployeeRoles()
    {
        return $this->belongsToMany(
            GasStationEmployeeRole::class,
            'gas_station_employee_gas_station_role',
            'gas_station_employee_id',
            'gas_station_role_id'
        );
    }
}
