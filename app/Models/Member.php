<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'designation', 'fb_url', 'tw_url', 'in_url','li_url','image','description', 'status'];
}
