<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Offer extends Authenticatable
{
    const PRISE_USD = 'USD';
    const PRISE_EUR = 'EUR';
    const PRISE_UAH = 'UAH';

    public  static   $getprise = [
                self::PRISE_EUR, self::PRISE_UAH, self::PRISE_USD
        ];


    protected $table = 'offers';

    protected $fillable = [
        'type_object', 'price', 'type_price', 'type_wall', 'number_rooms', 'user_id', 'phone', 'information','photo'
    ];
}
