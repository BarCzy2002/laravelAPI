<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{

    protected $table = 'people';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'lastname', 'phoneNumber', 'address', 'country'];
    use HasFactory;
}
