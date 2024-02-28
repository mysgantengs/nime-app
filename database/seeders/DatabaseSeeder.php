<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\datas;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         datas::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\datas::create([

        //     "images" => "hashiramas.jpg",
        //     "cardtitle" => "Naruto Hokages History",
        //     "descriptions" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quibusdam nam natus ut totam delectus suscipit sapiente hic dolores, mollitia similique quidem adipisci nulla maiores praesentium aspernatur cumque iusto incidunt rem libero, architecto iste voluptates quo! Ipsam aperiam pariatur libero accusantium qui perspiciatis amet nam nobis voluptate sapiente dignissimos, mollitia voluptas nisi nihil? At harum quisquam adipisci voluptatum nostrum laudantium dolorum consectetur corrupti unde accusamus? Asperiores eos necessitatibus dolorem pariatur laboriosam similique blanditiis fugit nemo? Illum nihil dolore blanditiis doloribus provident minus odit inventore, voluptas, quaerat quod nobis. Voluptas eius amet minima repudiandae veniam, eum expedita perspiciatis sed molestiae aliquam error tempora deleniti. Porro quo tempora assumenda non consequatur recusandae dolore dolor fuga explicabo beatae, laboriosam nobis. Laborum praesentium, aspernatur nobis tempore cumque unde odio voluptatibus dignissimos nihil consequuntur sunt laboriosam alias repudiandae dolores magni veritatis repellendus modi natus voluptate eos officia facere. Facere eius fugit unde sapiente eum molestias atque nisi voluptatem quo in nemo ipsa at, non aliquam quis, vel ducimus, corrupti voluptate totam laboriosam accusamus. Voluptate id fuga nulla perferendis ex veniam eius voluptatibus rerum sequi nesciunt?"

        // ]);




        

    }
}
