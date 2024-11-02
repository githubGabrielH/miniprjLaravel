<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro;

class LivroSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Livro::create([ 
            'titulo' => 'O Senhor dos Anéis', 
            'autor' => 'J.R.R. Tolkien', 
            'ano_publicacao' => 1954, 
            'resumo' => 'Uma aventura épica pela Terra Média.', 
            ]);
            Livro::create([ 
                'titulo' => 'pequeno principe', 
                'autor' => 'gabriel henrique', 
                'ano_publicacao' => 1964, 
                'resumo' => 'Historia de um menino e uma raposa', 
                ]);
                Livro::create([ 
                    'titulo' => 'Diario de uma banana: dias de cão', 
                    'autor' => 'jeff kinney', 
                    'ano_publicacao' => 2010, 
                    'resumo' => 'dias de verão d eferias da familia hefley', 
                    ]);
                    Livro::create([ 
                        'titulo' => 'Diario de uma banana: segurando vela', 
                        'autor' => 'Jeff Kinney', 
                        'ano_publicacao' => 2009, 
                        'resumo' => 'Greg fica sozinho no baie', 
                        ]);
                        Livro::create([ 
                            'titulo' => 'Diario de uma banana: casas dos horrores', 
                            'autor' => 'Jeff Kinney', 
                            'ano_publicacao' => 2011, 
                            'resumo' => 'Dias de neve e epoca de natal da familia Hefley.', 
                            ]);

    }
}
