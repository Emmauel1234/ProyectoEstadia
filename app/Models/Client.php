<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use HasApiTokens, HasFactory, HasRoles,  Notifiable;

        // Campos permitidos para asignamiento masivo
        protected $fillable = [
            'name',
            'email',
            'phone',
        ];
}
