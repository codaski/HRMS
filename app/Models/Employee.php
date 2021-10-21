<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Jetstream\HasProfilePhoto;

class Employee extends Model
{
    use HasFactory;
    use HasProfilePhoto;

    //The Relationship BelongsTo eloquent with Department Model.
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    //The Relationship BelongsTo eloquent with Job Model.
    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    //The Relationship HasMany eloquent with Vacation Model.
    public function vacation(): HasMany
    {
        return $this->hasMany(Vacation::class);
    }

    //Define The table associated with the employee model.
    protected $table = 'employees';

    //Specify either a fillable property on employee model class.
    protected $fillable = [
        'name',
        'code',
        'education',
        'graduation_date',
        'gender',
        'birth_date',
        'start_date',
        'resign_date',
        'id_number',
        'personal_email',
        'work_email',
        'personal_phone',
        'landline',
        'phone_ext',
        'work_phone',
        'address',
        'city',
        'country',
        'department_id',
        'job_id',
        'photo'
    ];

    //specify the route show for single item, such as https://hrms.test/empolyee/{code}.
    //Remove getRouteKeyName() function to show with table ID.
    public function getRouteKeyName()
    {
        return 'code';
    }

    //The attributes that should be casts such as array, date, time, datetime, boolean.
    protected $casts = [
        'gender' => 'boolean', // Boolean where 1 for Male and 0 for Female
        'graduation_date' => 'date',
        'birth_date' => 'date',
        'start_date' => 'date',
        'resign_date' => 'date',
    ];
}
