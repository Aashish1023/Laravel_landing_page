<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Setting extends Model
{
    use HasFactory;

    protected $table = 'setting';
    protected $fillable = ['name', 'short_name','email', 'address ', 'fb_url', 'tw_url', 'in_url','li_url','description', 'status'];

}
