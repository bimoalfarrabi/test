<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class RecreateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'recreate-db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'recreate medify_rekrutmen database';

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
	DB::connection('hospital')->statement("DROP DATABASE IF EXISTS `medify_rekrutmen`");
	DB::connection('hospital')->statement("CREATE DATABASE `medify_rekrutmen`");
    }
}
