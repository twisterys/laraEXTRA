<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2021-09-26 07:23:08',
                'updated_at' => '2021-09-26 07:23:08',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2021-09-26 07:23:08',
                'updated_at' => '2021-09-26 07:23:08',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2021-09-26 07:23:08',
                'updated_at' => '2021-09-26 07:23:08',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
