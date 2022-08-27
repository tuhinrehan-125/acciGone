<?php

namespace App\Models;

use BaoPham\DynamoDb\DynamoDbModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blackbox extends DynamoDbModel
{
    protected $fillable = [
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

    protected $primaryKey = 'id';

    protected $table = 'Blackboxes';

}