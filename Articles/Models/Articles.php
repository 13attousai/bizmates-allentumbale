<?php

namespace Articles\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Articles extends Model
{
    use HasFactory;
    protected $table = "articles";
    protected $fillable = ['title', 'description', 'content', 'cover'];
    protected $appends = ['date_time'];

    public function getDateTimeAttribute()
    {
        $dt = Carbon::parse($this->created_at);
        return $dt->format('M d, Y - h:iA');
    }
}
