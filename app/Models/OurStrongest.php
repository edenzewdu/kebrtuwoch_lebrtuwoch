<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurStrongest extends Model
{
    use HasFactory;

    // Specify the table if it does not follow Laravel's convention
    protected $table = 'our_strongest';

    // Specify the fillable fields to allow mass assignment
    protected $fillable = [
        'full_name',
        'image',
        'youtube_link',
    ];
}
