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
            'titulo' => '1984', 
            'autor' => 'George Orwell', 
            'ano_publicacao' => 1949, 
            'resumo' => 'Uma distopia sobre vigilância e controle social.', 
        ]);
        
        Livro::create([ 
            'titulo' => 'Dom Quixote', 
            'autor' => 'Miguel de Cervantes', 
            'ano_publicacao' => 1605, 
            'resumo' => 'As aventuras de um fidalgo que se torna cavaleiro andante.', 
        ]);
        
        Livro::create([ 
            'titulo' => 'A Revolução dos Bichos', 
            'autor' => 'George Orwell', 
            'ano_publicacao' => 1945, 
            'resumo' => 'Uma alegoria sobre a corrupção do poder em uma fazenda.', 
        ]);
        
        Livro::create([ 
            'titulo' => 'O Grande Gatsby', 
            'autor' => 'F. Scott Fitzgerald', 
            'ano_publicacao' => 1925, 
            'resumo' => 'A história de amor e tragédia na era do jazz.', 
        ]);
        
        Livro::create([ 
            'titulo' => 'Moby Dick', 
            'autor' => 'Herman Melville', 
            'ano_publicacao' => 1851, 
            'resumo' => 'A busca obsessiva de um capitão por uma baleia gigante.', 
        ]);
        
    }
}
