<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Supprimez la ligne existante pour créer les 21 catégories
        // Category::factory(21)->create();

        // Ajoutez vos catégories personnalisées ici
        $customCategories = [
            ['name' => 'Gekko'],
            ['name' => 'Pheonix'],
            ['name' => 'Skye'],
            ['name' => 'Astra'],
            ['name' => 'Brimstone'],
            ['name' => 'Fade'],
            ['name' => 'Jett'],
            ['name' => 'Viper'],
            ['name' => 'Harbor'],
            ['name' => 'Chamber'],
            ['name' => 'Raze'],
            ['name' => 'Killjoy'],
            ['name' => 'Sage'],
            ['name' => 'Reyna'],
            ['name' => 'Breach'],
            ['name' => 'Omen'],
            ['name' => 'Cypher'],
            ['name' => 'Neon'],
            ['name' => 'Kay/O'],
            ['name' => 'Yoru'],
            ['name' => 'Sova'],
            // Ajoutez les autres catégories personnalisées ici
        ];

        // Créez les catégories personnalisées
        foreach ($customCategories as $customCategory) {
            Category::create($customCategory);
        }

        // Code restant pour créer des utilisateurs et des publications
        $existingCategoriesIds = Category::pluck('id')->all();

        User::factory(21)->create()->each(function ($user) use ($existingCategoriesIds) {
            Post::factory(2)->create([
                'user_id' => $user->id,
                'category_id' => count($existingCategoriesIds)
            ]);
        });

    }
}

