<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AplicativosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aplicativos')->insert([
            ['titulo' => "Aplicativo 1",
            'ano' => 2020,
            'link'=>'http://www.dbins.com.br',
            'tecnologia'=>'React Native',
            'categoria' => "APP",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "aplicativo.png"],
            ['titulo' => "Aplicativo 2",
            'ano' => 2020,
            'link'=>'http://www.dbins.com.br',
            'tecnologia'=>'React Native',
            'categoria' => "APP",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "aplicativo.png"],
            ['titulo' => "Aplicativo 3",
            'ano' => 2020,
            'link'=>'http://www.dbins.com.br',
            'tecnologia'=>'React Native',
            'categoria' => "APP",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "aplicativo.png"],
            ['titulo' => "Aplicativo 4",
            'ano' => 2020,
            'link'=>'http://www.dbins.com.br',
            'tecnologia'=>'React Native',
            'categoria' => "APP",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "aplicativo.png"],
            ['titulo' => "Aplicativo 5",
            'ano' => 2020,
            'link'=>'http://www.dbins.com.br',
            'tecnologia'=>'React Native',
            'categoria' => "APP",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "aplicativo.png"],
            ['titulo' => "Aplicativo 6",
            'ano' => 2020,
            'link'=>'http://www.dbins.com.br',
            'tecnologia'=>'React Native',
            'categoria' => "APP",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "aplicativo.png"],
        ]);
    }
}
