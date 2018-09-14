<?php

use Illuminate\Database\Seeder;

class items_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'item1',
                'description' => 'item1',
                'quantity' =>21,
                'date' => Carbon\Carbon::createFromDate(2018, 1, 23),
                'price' => 21.01,
            ],[
                'name' => 'item2',
                'description' => 'item2',
                'quantity' =>22,
                'date' => Carbon\Carbon::createFromDate(2018, 2, 23),
                'price' => 22.02,
            ],[
                'name' => 'item3',
                'description' => 'item3',
                'quantity' =>23,
                'date' => Carbon\Carbon::createFromDate(2018, 3, 23),
                'price' => 23.02,
            ],[
                'name' => 'item4',
                'description' => 'item4',
                'quantity' =>24,
                'date' => Carbon\Carbon::createFromDate(2018, 4, 23),
                'price' => 24.04,
            ],[
                'name' => 'item5',
                'description' => 'item5',
                'quantity' =>25,
                'date' => Carbon\Carbon::createFromDate(2018, 5, 23),
                'price' => 25.05,
            ],[
                'name' => 'item6',
                'description' => 'item6',
                'quantity' =>26,
                'date' => Carbon\Carbon::createFromDate(2018, 6, 23),
                'price' => 26.06,
            ],[
                'name' => 'item7',
                'description' => 'item7',
                'quantity' =>27,
                'date' => Carbon\Carbon::createFromDate(2018, 7, 23),
                'price' => 27.07,
            ],[
                'name' => 'item8',
                'description' => 'item8',
                'quantity' =>28,
                'date' => Carbon\Carbon::createFromDate(2018, 8, 23),
                'price' => 28.08,
            ],[
                'name' => 'item9',
                'description' => 'item9',
                'quantity' =>29,
                'date' => Carbon\Carbon::createFromDate(2018, 9, 23),
                'price' => 29.09,
            ],[
                'name' => 'item10',
                'description' => 'item10',
                'quantity' =>21,
                'date' => Carbon\Carbon::createFromDate(2018, 10, 23),
                'price' => 30.1,
            ]

            ]);
    }
}
