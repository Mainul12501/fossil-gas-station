<?php

namespace App\Models\Backend;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Newsletter extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['email', 'status'];

    protected $searchableFields = ['*'];

    public static function createOrUpdateNewsletter($request, $id = null)
    {
        Newsletter::updateOrCreate(['id' => $id], $request->all());
    }
}
