<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contractDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'houseId',
        'userId',
        'staartOfContract',
        'endOfContract',
        'duration',
        'totalRent',
    ];

    protected $primaryKey = 'contractId';
}