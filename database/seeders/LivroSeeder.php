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
                'resumo' => 'Um romance distópico sobre um regime totalitário que controla a vida dos cidadãos.',
                ]);
                Livro::create([
                    'titulo' => 'Dom Quixote',
                    'autor' => 'Miguel de Cervantes',
                    'ano_publicacao' => 1605,
                    'resumo' => 'A história de um cavaleiro que parte em busca de aventuras com seu fiel escudeiro.',
                    ]);
                    Livro::create([
                        'titulo' => 'O Grande Gatsby',
                        'autor' => 'F. Scott Fitzgerald',
                        'ano_publicacao' => 1925,
                        'resumo' => 'Um romance sobre amor, riqueza e ilusões na sociedade americana dos anos 1920.',
                        ]);
                        Livro::create([
                            'titulo' => 'Matar a Saudade',
                            'autor' => 'Clarice Lispector',
                            'ano_publicacao' => 1969,
                            'resumo' => 'Uma reflexão sobre a natureza humana e a busca por sentido na vida.',
                            ]);
    }
}
