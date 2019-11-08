<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ShowQuery extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:show_query';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Custom console tinker to show query script';

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
        DB::listen(function ($query) { dump($query->sql); dump($query->bindings); dump($query->time); });
    }
}
