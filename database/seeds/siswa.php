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
        ['nama'=>'dani','alamat'=>'sekeandur'],
        ['nama'=>'nisa','alamat'=>'sindang palay'],
        ['nama'=>'melda','alamat'=>'cilisung'],
        
        ];

        DB::table('siswa')->insert($post);
    }
}
