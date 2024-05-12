<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory; // Using HasFactory trait for model

    protected $guarded=[]; // Allowing mass assignment for all attributes
}
