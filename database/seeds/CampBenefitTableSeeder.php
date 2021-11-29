<?php

use Illuminate\Database\Seeder;
use App\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $campbenefit = [
            [
                'camp_id' => 1,
                'name' => 'Pro TechStack Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro image'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 mentoring'
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project ceritificate'
            ],
            [
                'camp_id' => 1,
                'name' => 'Unlimited Access'
            ],
            [
                'camp_id' => 1,
                'name' => 'Job Opportunity'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder'
            ],
            [
                'camp_id' => 2,
                'name' => 'Free TechStack Kit'
            ],
            [
                'camp_id' => 2,
                'name' => 'Limited Access'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Videos'
            ],
            [
                'camp_id' => 2,
                'name' => 'Free Design Kit'
            ],
        ];

        CampBenefit::insert($campbenefit);
    }
}
