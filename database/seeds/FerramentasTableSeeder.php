<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FerramentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ferramentas')->insert([
            ['titulo' => "Ferramentas 1",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "ferramentas.png"],
            ['titulo' => "Ferramentas 2",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "ferramentas.png"],
            ['titulo' => "Ferramentas 3",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "ferramentas.png"],
            ['titulo' => "Ferramentas 4",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "ferramentas.png"],
            ['titulo' => "Ferramentas 5",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "ferramentas.png"],
            ['titulo' => "Ferramentas 6",
            'link' => "http://www.dbins.com.br",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "ferramentas.png"]
        ]);
    }
}
