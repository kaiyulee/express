<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');
        User::truncate();
        App\Models\Article::truncate();
        // App\Models\Category::truncate();
        // factory(User::class, 47)->create()->each(function($u) {
            // $n = rand(1,30);
            // // dd($u);
            // $u->articles()->save(factory(App\Models\Article::class, $n)->make());
        // });
        $users = factory(App\Models\User::class, 13)
                       ->create()
                       ->each(function($u) {
                            $n = rand(1,30);
                            for ($i=1; $i < $n; $i ++) {
                                $u->articles()->save(factory(App\Models\Article::class)->make());
                            }
                       });
        // factory(App\Models\Article::class, 54)->create();
        factory(App\Models\Category::class, 20)->create();
        // factory(App\Mo/usdels\Comment::class, 98)->create();
        // factory(App\Models\Notification::class, 12)->create();
        Model::reguard();
    }
}
