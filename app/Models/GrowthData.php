<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrowthData extends Model
{
    protected $table = 'infagrowth_data'; // Specify the table name if it differs from the default naming convention

    protected $fillable = ['month', 'kids_name', 'age', 'height', 'weight']; // Specify the fillable attributes

    // Additional model logic, such as relationships or custom methods, can be defined here
}
