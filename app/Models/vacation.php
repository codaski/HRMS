<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class vacation extends Model
{
    use HasFactory;

    //The Relationship HasMany eloquent with Employee Model.
    public function employees(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    //Define The table associated with the vacation model.
    protected $table = 'vacations';

    //Specify either a fillable property on vacation model class.
    protected $fillable = [
        'title',
        'date_from',
        'date_to',
        'employee_id'
    ];

    //The attributes that should be casts such as array, date, time, datetime, boolean.
    protected $casts = [
        'date_from' => 'date',
        'date_to' => 'date',

    ];
}
