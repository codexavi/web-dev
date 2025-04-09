<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class product extends Model
{
    // HasFactory trait allows us to create test data using model factories
    // This is useful for seeding test databases and writing tests
    use HasFactory;

    // The $fillable property specifies which attributes can be mass-assigned
    // This is a security feature to prevent mass-assignment vulnerabilities
    // Only these fields can be filled using create() or fill() methods

    protected $fillable = [
        'name',
        'description', 
        'price',
        'status'
    ];

}

