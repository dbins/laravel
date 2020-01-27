<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio')->insert([
            ['titulo' => "Portfólio 1",
            'categoria' => "Web",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "portfolio1.png"],
            ['titulo' => "Portfólio 2",
            'categoria' => "Web",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "portfolio2.png"],
            ['titulo' => "Portfólio 3",
            'categoria' => "Web",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "portfolio3.png"],
            ['titulo' => "Portfólio 4",
            'categoria' => "Web",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "portfolio4.png"],
        ]);
    }
}
