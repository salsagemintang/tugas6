<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Anggota_model::insert([[
            'nama_anggota'=>'salsabila',
            'alamat'=>'Jl.Danau Buyan G7/F19',
            'telp'=>'087860144737',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'nama_anggota'=>'putri puspita',
            'alamat'=>'Jl.Amarta',
            'telp'=>'09876543123',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'nama_anggota'=>'valen zidana',
            'alamat'=>'Gresik',
            'telp'=>'123456789',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'nama_anggota'=>'nabila jennanda',
            'alamat'=>'Solo',
            'telp'=>'123456789',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'nama_anggota'=>'anatasya',
            'alamat'=>'Malang',
            'telp'=>'09765234567',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        ]);
    }
}
