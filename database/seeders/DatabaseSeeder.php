<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Departement;
use App\Models\Employe;
use App\Models\FuncUnit;
use App\Models\Post;
use App\Models\Unit;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

				User::create([
					'name' => 'Admin 14',
					'email' => 'adminkanreg@gmail.com',
					'password' => bcrypt('12345')
				]);

				Category::create([
					'title' => 'Berita Kepegawaian',
					'slug' => 'berita-kepegawaian'
				]);

				// Post::create([
				// 	'title' => 'Ini COntoh Post Pertama di table',
				// 	'category_id' => 1,
				// 	'user_id' => 1,
				// 	'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, voluptates tempore quasi dolores culpa unde nesciunt velit itaque fuga magni incidunt tenetur, nisi quis perspiciatis obcaecati atque nihil. Aliquid vero, aliquam dignissimos incidunt praesentium distinctio quaerat aspernatur non sint eveniet?',
				// 	'slug' => 'ini-contoh',
				// 	'excerpt' => 'quasi dolores culpa unde nesciunt velit itaque fuga magni incidunt tenetur, nisi quis perspiciatis obcaecati atque nihil',
				// 	'thumbnail' => 'test.jpg',
				// 	'status' => 1,
				// 	'is_headline' => false
				// ]);

				Unit::create([
					'name' => 'Bidang Informasi Kepegawaian'
				]);

				FuncUnit::create([
					'unit_id' => 1,
					'func_unit' => 'Membuat dan mengembangakan aplikasi untuk internal kantor'
				]);

				Departement::create([
					'name'	=> 'Analis Sumber Daya Manusia'
				]);

				// Employe::create([
				// 	'unit_id' => 1,
				// 	'departement_id' => 1,
				// 	'name' => 'Stacy Vidy Mamentu',
				// 	'nip' => '199609102022031002',
				// 	'jk' => 'P',
				// 	'photo' => 'photo.jpeg'
				// ]);
    }
}
