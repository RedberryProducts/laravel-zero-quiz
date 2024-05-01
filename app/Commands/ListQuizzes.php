<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\File;
use LaravelZero\Framework\Commands\Command;

class ListQuizzes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:list-quizzes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $quizzesJson = File::get(storage_path('json/quizzes.json'));
        $quizzes = json_decode($quizzesJson, true);

        $this->info("Available Quizzes:");
        foreach ($quizzes['quizzes'] as $quiz) {
            $this->line("{$quiz['id']}: {$quiz['title']}");
        }
    }

}
