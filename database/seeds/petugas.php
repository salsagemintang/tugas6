<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Petugas_model::insert([[
            'nama_petugas'=>'salsabila',
            'alamat'=>'Jl.Danau Buyan G7/F19',
            'telp'=>'087860144737',
            'username'=>'salsa',
            'password'=>'salsa123',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'nama_petugas'=>'putri puspita',
            'alamat'=>'Jl.Amarta',
            'telp'=>'09876543123',
            'username'=>'puput',
            'password'=>'puput123',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'nama_petugas'=>'valen zidana',
            'alamat'=>'Gresik',
            'telp'=>'123456789',
            'username'=>'valen',
            'password'=>'valen123',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'nama_petugas'=>'nabila jennanda',
            'alamat'=>'Solo',
            'telp'=>'123456789',
            'username'=>'bila',
            'password'=>'bila123',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'nama_petugas'=>'anatasya',
            'alamat'=>'Malang',
            'telp'=>'09765234567',
            'username'=>'anat',
            'password'=>'anat123',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        ]);
    }
}
