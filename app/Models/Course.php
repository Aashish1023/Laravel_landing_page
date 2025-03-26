<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $fillable = ['title','short_desc','description','icon_class','status']; // Specify the table name
}
