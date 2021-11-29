<?php

use Illuminate\Database\Seeder;
use App\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $camps = [
            [
                'title' => 'Premium',
                'slug' => 'kelas-premium',
                'price' => 200,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Free',
                'slug' => 'kelas-gratis',
                'price' => 140,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];

        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
    }
}
