<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /** @use HasFactory<\Database\Factories\LocationFactory> */
    use HasFactory;
    protected $fillable=[
        'client_id',
        'car_id',
        'date_debut',
        'date_fin',
        'prix_total',
    ];
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function car(){
        return $this->belongsTo(Car::class);
    }
}
