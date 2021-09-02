<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FooBar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'foo:bar
                                {var1 : for example}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $var1 = $this->argument('var1');
        echo 'var 1: ' . $var1;
        return 0;
    }
}
