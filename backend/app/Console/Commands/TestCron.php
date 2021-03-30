<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'testcron';
    // protected $signature = 'writelog:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'test cron';
    // protected $description = 'write info messages in log file';

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
        $file_name = 'test.txt';
        $input = 'テストです';
        file_put_contents($file_name,$input,FILE_APPEND);
        // logger()->info('This is WriteLog Command.');
    }
}
