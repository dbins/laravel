<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            ['titulo' => "Video 1",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "video.png"],
            ['titulo' => "Video 2",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "video.png"],
            ['titulo' => "Video 3",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "video.png"],
            ['titulo' => "Video 4",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "video.png"],
            ['titulo' => "Video 5",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "video.png"],
            ['titulo' => "Video 6",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "video.png"]
        ]);
    }
}
