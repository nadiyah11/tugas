<?php

use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post=[
        ['nama'=>'dani','alamat'=>'sekeandur','jk'=>'laki-laki'],
        ['nama'=>'nisa','alamat'=>'sindang palay','jk'=>'perempuan'],
        ['nama'=>'melda','alamat'=>'cilisung','jk'=>'perempuan'],
         ['nama'=>'meli','alamat'=>'sindang palay','jk'=>'perempuan'],
        ['nama'=>'nida','alamat'=>'sukamenak','jk'=>'perempuan'],
        
        ];

        DB::table('siswa')->insert($post);
    }
}
