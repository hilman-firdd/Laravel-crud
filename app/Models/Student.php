<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $table = 'students';
    protected $fillable = ['nama','nrp','email','jurusan','created_at','updated_at','deleted_at'];
}
