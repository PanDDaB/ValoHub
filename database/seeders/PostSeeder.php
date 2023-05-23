<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Créez vos publications personnalisées ici
        $posts = [
            [
                'title' => 'Première publication',
                'content' => 'Conatenu de la première publication',
                'category_id' => 1, // ID de la catégorie à laquelle la publication appartient
            ],
            [
                'title' => 'Deuxième publication',
                'content' => 'Contenu de la deuxième publication',
                'category_id' => 2, // ID de la catégorie à laquelle la publication appartient
            ],
            // Ajoutez les autres publications personnalisées ici
        ];

        // Créez les publications personnalisées
        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
