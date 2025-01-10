<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function serviceDetail()
    {
        return $this->belongsTo(ServiceDetails::class, 'id', 'service_id');
    }
}
