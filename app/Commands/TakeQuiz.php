<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\File;
use LaravelZero\Framework\Commands\Command;

class TakeQuiz extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:take-quiz {id}';

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
        $quizId = $this->argument('id');
        $quizzesJson = File::get(storage_path('json/quizzes.json'));
        $quizzes = json_decode($quizzesJson, true);

        $quiz = collect($quizzes['quizzes'])->firstWhere('id', $quizId);
        if (!$quiz) {
            $this->error("Quiz not found.");
            return;
        }

        $this->info("Starting quiz: {$quiz['title']}");
        $score = 0;

        foreach ($quiz['questions'] as $question) {
            $answer = $this->choice($question['question'], $question['options']);
            if ($answer === $question['answer']) {
                $score++;
            }
        }

        $this->info("Your score: $score/" . count($quiz['questions']));
    }

}
