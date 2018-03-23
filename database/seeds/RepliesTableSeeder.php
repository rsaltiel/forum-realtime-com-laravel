<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cria automaticamente 50 tópicos. Para cada tópico, cria entre 5 e 10 respostas
        $threads = factory(\App\Thread::class, 50)->create();
        $threads->each(function ($thread) {
            factory(\App\Reply::class, rand(5,10))->create(['thread_id' => $thread->id]);
        });
    }
}
