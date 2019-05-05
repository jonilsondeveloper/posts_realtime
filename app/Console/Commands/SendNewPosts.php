<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\NewPost;

class SendNewPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:new';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send new post';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $user = \App\User::first();
        // $post = \App\Models\Post::create([
        //     'text' => 'Teste de Comando',
        //     'data_time' => date('Y-m-d H:i:s'),
        //     'user_id' => auth()->user()->id
        // ]);

        // event(new NewPost($post));
    }
}
