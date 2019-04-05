<?php

use App\Models\Offer;
use Illuminate\Database\Seeder;

class OfferTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Offer::create([
                        'type_object' => 'квартира',
                        'price' => '200',
                        'type_price' => 'USD',
                        'type_wall' => 'brik',
                        'number_rooms' => 5,
                        'user_id' =>1,
                        'information' =>'fejskjvlksj',
        ]);
        factory(Offer::class,10)->create();


    }
}
