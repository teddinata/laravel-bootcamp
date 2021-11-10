<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

// use Str;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
            'title'         => 'Gila Belajar',
            'description'   => 'Bootcamp berdurasi 6 bulan, bootcamp akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli bernilai ratusan juta',
            'slug'          => 'gila-belajar',
            'price'         => '199',
            'created_at'    => date('Y-m-d H:i:s', time()),
            'updated_at'    => date('Y-m-d H:i:s', time()),
            ],
            [
            'title'         => 'Baru Mulai',
            'slug'          => 'baru-mulai',
            'description'   => 'Bootcamp berdurasi 2-3 bulan, bootcamp akan mengajak Anda untuk belajar dari dasar hingga menengah, fokus pada bidang yang ingin Anda kuasai',
            'price'         => '129',
            'created_at'    => date('Y-m-d H:i:s', time()),
            'updated_at'    => date('Y-m-d H:i:s', time()),
            ]
        ];

        // // 1st method
        // foreach ($camps as $key => $camp) {
        //     Camp::create($camp);
        // }

        // 2nd method
        Camp::insert($camps);
    }
}
