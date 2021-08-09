<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'eveId','name', 'email','eveName', 'eveLocation', 'eveType', 'eveDate', 'eveStartAt', 'eveEndAt', 'eveOrganizer', 'eveStatus', 'accessStatus', 
    ];

    public function eventRequest(){

        return belongsToMany('App\Models\Event');
    }
}

