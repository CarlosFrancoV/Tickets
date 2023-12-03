<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    protected $fillable = ['nombre', 'descripcion', 'fecha', 'lugar'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}