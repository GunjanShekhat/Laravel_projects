<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class houseDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'houseName',
        'userID',
        'houseRentPerMonth',
        'houseRentPerDay',
        'totalBedrooms',
        'totalBathrooms',
        'houseArea',
        'houseCity',
        'houseState',
        'houseStatus',
    ];

    protected $primaryKey = 'houseId';
}