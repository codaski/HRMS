<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;

    //The Relationship HasMany eloquent with Employee Model.
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    //Define The table associated with the department model.
    protected $table = 'departments';

    //Specify either a fillable property on department model class.
    protected $fillable = [
        'name',
        'slug'
    ];

    //specify the route show for single item, such as https://hrms.test/department/{slug}.
    //Remove getRouteKeyName() function to show with table ID.
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
