<?php

namespace Interests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interests extends Model
{
    use HasFactory;
    protected $table = "interests";
    protected $fillable = ['name', 'image', 'description', 'type'];
}
