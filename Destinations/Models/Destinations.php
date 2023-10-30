<?php

namespace Destinations\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    use HasFactory;
    protected $table = "destinations";
    protected $fillable = ['region_id', 'name', 'description', 'rating'];

    public function region()
    {
        return $this->belongsTo('Regions\Models\Regions', 'region_id', 'id');
    }
}
