<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            ['titulo' => "Blog 1",
            'link'=>'http://www.dbins.com.br',
            'conteudo'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.',
            'categoria' => "JAVASCRIPT",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "blog.png"],
            ['titulo' => "Blog 2",
            'conteudo'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.',
            'link'=>'http://www.dbins.com.br',
            'conteudo'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.',
            'categoria' => "JAVASCRIPT",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "blog.png"],
            ['titulo' => "Blog 3",
            'link'=>'http://www.dbins.com.br',
            'conteudo'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.',
            'categoria' => "JAVASCRIPT",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "blog.png"],
            ['titulo' => "Blog 4",
            'link'=>'http://www.dbins.com.br',
            'conteudo'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.',
            'categoria' => "JAVASCRIPT",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "blog.png"],
            ['titulo' => "Blog 5",
            'link'=>'http://www.dbins.com.br',
            'conteudo'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.',
            'categoria' => "SQL",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "blog.png"],
            ['titulo' => "Blog 6",
            'link'=>'http://www.dbins.com.br',
            'conteudo'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.',
            'categoria' => "SQL",
            'descricao' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue, risus cursus rhoncus fringilla, est purus rutrum nunc, in auctor lacus nunc fringilla tellus.",
            'imagem' => "blog.png"],
        ]);
    }
}
