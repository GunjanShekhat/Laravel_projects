<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class house_detail extends Model
{
    use HasFactory;

    protected $fillable = ['house_name','address','state','city','rent_per_month','seller_id_foreign'];
    protected $table = 'house_details';
    protected $primaryKey = 'house_id';
}