<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $fillable = ['nombre','RUT' ,'email', 'telefono'];

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'client_id', 'id');
    }
}