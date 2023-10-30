<?php

namespace Regions\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;
    protected $table = "regions";
    protected $fillable = ['name'];

    public function destinations()
    {
        return $this->hasMany('Destinations\Models\Destinations', 'region_id', 'id');
    }
}
