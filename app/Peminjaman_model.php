<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman_model extends Model
{
    protected $table="peminjaman";
    protected $primaryKey="id";

    protected $fillable = [
        'id', 'tgl_pinjam', 'id_anggota', 'id_petugas', 'deadline',
    ];

    public function Anggota_model(){
        return $this -> belongsTo('App\Anggota_model', 'id_anggota');
    }

    public function Petugas_model(){
        return $this -> belongsTo('App\Petugas_model', 'id_petugas');
    }

    public function detail(){
        return $this -> hasOne('App\detail_peminjaman', 'id');
    }

    public $timestamps=false;

}
