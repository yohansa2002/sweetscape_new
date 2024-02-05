<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    protected $table = 'subscribers'; // Specify the table name if it's different from the default

    protected $fillable = [
        'name',
        'email',
        'country',
        // Add other fillable columns as needed
    ];
}
