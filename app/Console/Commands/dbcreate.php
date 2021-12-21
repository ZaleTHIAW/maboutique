<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class dbcreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:dbcreate[name?]';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Nouvelle base de données';

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
     * @return int
     */
    public function handle()
    {
        $schemaName=$this->argument('name')?:config('database.connections.mysql.database');
        $charset=config('database.connections.mysql.charset', 'utf8mb4');
        $collation=config('database.connections.mysql.charset', 'utf8mb4_general_CI');
       
        config(['database.connections.mysql.database'=> null]);
         $query="DROP DATABASE $schemaname";
         DB::statement($query);
         $query="CREATE DATABASE IF NOT EXISTS $schemaName character SET $charset COLLATE $collation";
         echo "Base de données créée avec succés";
        config(['database.connections.mysql.database'=> $schemaName]);

    }
}
