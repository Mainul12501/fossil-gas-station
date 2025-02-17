<?php

namespace App\Models\Backend;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GasStationEmployeeRole extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'gas_station_employee_roles';

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
//        static::deleting(function ($employeeRole) {
//            if (count($employeeRole->gasStationEmployees) > 0)
//            {
//                $employeeRole->gasStationEmployees()->detach();
//            }
//        });
    }

    public static function createOrUpdateEmployeeRole($request, $id = null)
    {
        static::updateOrCreate(['id' => $id], [
            'name'  => $request->name,
            'status'    => $request->status == 'on' ? 1 : 0,
        ]);
    }

    public function gasStationEmployees()
    {
        return $this->belongsToMany(
            GasStationEmployee::class,
            'gas_station_employee_gas_station_role',
            'gas_station_role_id'
        );
    }
}
