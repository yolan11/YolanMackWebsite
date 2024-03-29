<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['familyName', 'firstName', 'email', 'phoneNumber', 'eventDate', 'eventLocation',
        'eventType', 'streetNumber', 'streetName', 'city', 'country', 'information'];
}
