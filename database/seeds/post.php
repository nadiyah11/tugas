<?php

use Illuminate\Database\Seeder;

class post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post=[
        ['title'=>'Tips cepet Nikah','content'=>'lorem ipsum'],
        ['title'=>'harus menunda nikah ?','content'=>'lorem ipsum'],
        ['title'=>'membangunvisi misi keluarga','content'=>'lorem ipsum'],
        ];

        DB::table('post')->insert($post);
    }
}
