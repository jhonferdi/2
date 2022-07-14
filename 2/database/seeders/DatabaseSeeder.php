<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            "name" => "Jhon Ferdi", 
            "username" => "jhonferdi",
            "email" => "jhonferdi@xmail.com",
            "password" => bcrypt('qwerty')
        ]);

        User::factory(3)->create();
        Post::factory(20)->create();

        // User::create([
        //     "name" => "Joseph Stalin", 
        //     "email" => "josephstalin@zmail.com",
        //     "password" => bcrypt('123')
        // ]);

        // User::create([
        //     "name" => "Alexander Asep", 
        //     "email" => "alexandersep@amail.com",
        //     "password" => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Ngoding',
            'slug' => 'ngoding'
        ]);

        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);

        Category::create([
            'name' => 'Healing',
            'slug' => 'healing'
        ]);

        // Post::create(['title' => 'Put in The Black Box', 
        //     'category_id' => 1, 
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama', 
        //     'excerpt' => 'lorem pertama', 
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia laudantium vero maxime minima architecto ipsa repudiandae ducimus voluptatem alias, inventore rem quaerat perferendis, nesciunt aperiam laborum quis doloremque porro odio error quisquam incidunt! Omnis modi, aspernatur doloremque
        //                 non ad delectus et dolor cum error at atque sapiente incidunt eaque consequatur placeat optio dolorum vel iusto assumenda perferendis fugit quibusdam inventore vitae! Dolor delectus architecto magni tempora similique distinctio corporis sequi non earum
        //                 aut officiis excepturi libero iusto commodi hic animi, nisi debitis rem impedit. Maiores neque nihil saepe minus, quia delectus vero, quidem ea consequuntur fuga optio mollitia sed aspernatur laborum quis! Delectus amet dolorem recusandae soluta quas
        //                 ad, debitis modi maiores ut nulla repellat quam quod voluptatem facilis reprehenderit dolor cum eum nemo, eaque quos quidem porro facere. Cupiditate magni est aut ullam consequuntur facilis perspiciatis. Recusandae illo tenetur illum, vero nulla, laudantium
        //                 officiis facere similique possimus exercitationem cupiditate. Et tempore, temporibus inventore aliquam laudantium eum neque vero dolor, dicta adipisci, dolore hic reiciendis molestias corrupti rem. Enim, distinctio magni ipsam nobis numquam illum rem
        //                 maxime quibusdam earum molestiae accusamus, ut voluptatibus doloremque excepturi dolor? Assumenda commodi ipsa provident similique laboriosam error ex est beatae maiores! Perferendis, aliquid quaerat.'
        // ]);

        // Post::create(['title' => 'Put in The white Box', 
        //     'category_id' => 1, 
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua', 
        //     'excerpt' => 'lorem kedua', 
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia laudantium vero maxime minima architecto ipsa repudiandae ducimus voluptatem alias, inventore rem quaerat perferendis, nesciunt aperiam laborum quis doloremque porro odio error quisquam incidunt! Omnis modi, aspernatur doloremque
        //                 non ad delectus et dolor cum error at atque sapiente incidunt eaque consequatur placeat optio dolorum vel iusto assumenda perferendis fugit quibusdam inventore vitae! Dolor delectus architecto magni tempora similique distinctio corporis sequi non earum
        //                 aut officiis excepturi libero iusto commodi hic animi, nisi debitis rem impedit. Maiores neque nihil saepe minus, quia delectus vero, quidem ea consequuntur fuga optio mollitia sed aspernatur laborum quis! Delectus amet dolorem recusandae soluta quas
        //                 ad, debitis modi maiores ut nulla repellat quam quod voluptatem facilis reprehenderit dolor cum eum nemo, eaque quos quidem porro facere. Cupiditate magni est aut ullam consequuntur facilis perspiciatis. Recusandae illo tenetur illum, vero nulla, laudantium
        //                 officiis facere similique possimus exercitationem cupiditate. Et tempore, temporibus inventore aliquam laudantium eum neque vero dolor, dicta adipisci, dolore hic reiciendis molestias corrupti rem. Enim, distinctio magni ipsam nobis numquam illum rem
        //                 maxime quibusdam earum molestiae accusamus, ut voluptatibus doloremque excepturi dolor? Assumenda commodi ipsa provident similique laboriosam error ex est beatae maiores! Perferendis, aliquid quaerat.'
        // ]);

        // Post::create(['title' => 'Put in The Red Box', 
        //     'category_id' => 2, 
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga', 
        //     'excerpt' => 'lorem ketiga', 
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia laudantium vero maxime minima architecto ipsa repudiandae ducimus voluptatem alias, inventore rem quaerat perferendis, nesciunt aperiam laborum quis doloremque porro odio error quisquam incidunt! Omnis modi, aspernatur doloremque
        //                 non ad delectus et dolor cum error at atque sapiente incidunt eaque consequatur placeat optio dolorum vel iusto assumenda perferendis fugit quibusdam inventore vitae! Dolor delectus architecto magni tempora similique distinctio corporis sequi non earum
        //                 aut officiis excepturi libero iusto commodi hic animi, nisi debitis rem impedit. Maiores neque nihil saepe minus, quia delectus vero, quidem ea consequuntur fuga optio mollitia sed aspernatur laborum quis! Delectus amet dolorem recusandae soluta quas
        //                 ad, debitis modi maiores ut nulla repellat quam quod voluptatem facilis reprehenderit dolor cum eum nemo, eaque quos quidem porro facere. Cupiditate magni est aut ullam consequuntur facilis perspiciatis. Recusandae illo tenetur illum, vero nulla, laudantium
        //                 officiis facere similique possimus exercitationem cupiditate. Et tempore, temporibus inventore aliquam laudantium eum neque vero dolor, dicta adipisci, dolore hic reiciendis molestias corrupti rem. Enim, distinctio magni ipsam nobis numquam illum rem
        //                 maxime quibusdam earum molestiae accusamus, ut voluptatibus doloremque excepturi dolor? Assumenda commodi ipsa provident similique laboriosam error ex est beatae maiores! Perferendis, aliquid quaerat.'
        // ]);

        // Post::create(['title' => 'Put in The Silver Box', 
        //     'category_id' => 2, 
        //     'user_id' => 3,
        //     'slug' => 'judul-keempat', 
        //     'excerpt' => 'lorem keempat', 
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia laudantium vero maxime minima architecto ipsa repudiandae ducimus voluptatem alias, inventore rem quaerat perferendis, nesciunt aperiam laborum quis doloremque porro odio error quisquam incidunt! Omnis modi, aspernatur doloremque
        //                 non ad delectus et dolor cum error at atque sapiente incidunt eaque consequatur placeat optio dolorum vel iusto assumenda perferendis fugit quibusdam inventore vitae! Dolor delectus architecto magni tempora similique distinctio corporis sequi non earum
        //                 aut officiis excepturi libero iusto commodi hic animi, nisi debitis rem impedit. Maiores neque nihil saepe minus, quia delectus vero, quidem ea consequuntur fuga optio mollitia sed aspernatur laborum quis! Delectus amet dolorem recusandae soluta quas
        //                 ad, debitis modi maiores ut nulla repellat quam quod voluptatem facilis reprehenderit dolor cum eum nemo, eaque quos quidem porro facere. Cupiditate magni est aut ullam consequuntur facilis perspiciatis. Recusandae illo tenetur illum, vero nulla, laudantium
        //                 officiis facere similique possimus exercitationem cupiditate. Et tempore, temporibus inventore aliquam laudantium eum neque vero dolor, dicta adipisci, dolore hic reiciendis molestias corrupti rem. Enim, distinctio magni ipsam nobis numquam illum rem
        //                 maxime quibusdam earum molestiae accusamus, ut voluptatibus doloremque excepturi dolor? Assumenda commodi ipsa provident similique laboriosam error ex est beatae maiores! Perferendis, aliquid quaerat.'
        // ]);
    }
}
