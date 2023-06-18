<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShowUserProfile extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = [
        'profile_picture',
        'first_name',
        'last_name',
        'email_address',
        'address',
        'contact_number',
        'province',
        'city',
        'birthday_month',
        'birthday_day',
        'birthday_year',
    ];


    /*protected $primaryKey = 'id'; // Specify the primary key column name if it differs from the default 'id'
    public $incrementing = true; // Set to true if the primary key is auto-incrementing
    protected $keyType = 'int'; // Set the primary key data type if it's not an integer

    protected $dates = ['created_at', 'updated_at']; // Specify the columns that should be treated as dates
*/
}
