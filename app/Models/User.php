<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use BaoPham\DynamoDb\DynamoDbModel;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends DynamoDbModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'name',
        // 'email',
        // 'password',
        'id',
        'auth_key',
        'userId',
        'company_name',
        'time',
        'Latitude',
        'Longitude',
        'Altitude',
        'speed',
        'accx',
        'accy',
        'accz',
        'gyrox',
        'gyroy',
        'gyroz',
        'roll',
        'pitch',
        'yaw',
        'engine',
        'ac',
        'break',
        'sonar1',
        'sonar2',
        'sonar3',
        'sonar4',
        'battery',
    ];

    // protected $primaryKey = 'time';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'Blackboxes';
}