<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Buku_model::insert([[
            'judul'=>'Laskar Pelangi',
            'penerbit'=>'Gramedia',
            'pengarang'=>'Andrea Hirata',
            'foto'=>'-',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'judul'=>'Bumi Manusia',
            'penerbit'=>'Gramedia',
            'pengarang'=>'Ananta Toer',
            'foto'=>'-',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'judul'=>'NKCTHI',
            'penerbit'=>'Gramedia',
            'pengarang'=>'Isyana',
            'foto'=>'-',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'judul'=>'Seperti Hujan yang Jatuh di Bulan Juni',
            'penerbit'=>'Gramedia',
            'pengarang'=>'Boy Chandra',
            'foto'=>'-',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        [
            'judul'=>'Senja dan Pagi',
            'penerbit'=>'Gramedia',
            'pengarang'=>'Alffy Rev',
            'foto'=>'-',
            'created_at'=>date('Y-m-d H:i:s')
        ],
        ]);
    }
}
