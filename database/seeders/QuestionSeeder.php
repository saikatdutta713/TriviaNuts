<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        // Define an array of demo questions
        $demoQuestions = [
            [
                'question_id' => '1',
                'question_text' => 'What is 2 + 3?',
                'answer_option_a' => '4',
                'answer_option_b' => '5',
                'answer_option_c' => '6',
                'answer_option_d' => '7',
                'correct_option' => 'b',
                'category_id' => 1, // Mathematics category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => '2',
                'question_text' => 'How many days are in a leap year?',
                'answer_option_a' => '365',
                'answer_option_b' => '366',
                'answer_option_c' => '364',
                'answer_option_d' => '363',
                'correct_option' => 'b',
                'category_id' => 1, // Mathematics category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => '3',
                'question_text' => 'Which planet is known as the "Red Planet"?',
                'answer_option_a' => 'Mars',
                'answer_option_b' => 'Venus',
                'answer_option_c' => 'Jupiter',
                'answer_option_d' => 'Saturn',
                'correct_option' => 'a',
                'category_id' => 3, // Current Affairs category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => '4',
                'question_text' => 'What is the capital of Japan?',
                'answer_option_a' => 'Beijing',
                'answer_option_b' => 'Seoul',
                'answer_option_c' => 'Tokyo',
                'answer_option_d' => 'Shanghai',
                'correct_option' => 'c',
                'category_id' => 3, // Current Affairs category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => '5',
                'question_text' => 'Which programming language is often used for web development?',
                'answer_option_a' => 'Java',
                'answer_option_b' => 'C++',
                'answer_option_c' => 'Python',
                'answer_option_d' => 'HTML/CSS',
                'correct_option' => 'c',
                'category_id' => 4, // Computer category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => '6',
                'question_text' => 'How many continents are there on Earth?',
                'answer_option_a' => '4',
                'answer_option_b' => '5',
                'answer_option_c' => '6',
                'answer_option_d' => '7',
                'correct_option' => 'd',
                'category_id' => 2, // Aptitude category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => '7',
                'question_text' => 'Who wrote the play "Romeo and Juliet"?',
                'answer_option_a' => 'William Shakespeare',
                'answer_option_b' => 'Charles Dickens',
                'answer_option_c' => 'Leo Tolstoy',
                'answer_option_d' => 'Jane Austen',
                'correct_option' => 'a',
                'category_id' => 3, // Current Affairs category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => '8',
                'question_text' => 'Which gas do plants absorb from the atmosphere?',
                'answer_option_a' => 'Oxygen',
                'answer_option_b' => 'Carbon Dioxide',
                'answer_option_c' => 'Nitrogen',
                'answer_option_d' => 'Hydrogen',
                'correct_option' => 'b',
                'category_id' => 2, // Aptitude category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => '9',
                'question_text' => 'What is the largest mammal on Earth?',
                'answer_option_a' => 'Elephant',
                'answer_option_b' => 'Giraffe',
                'answer_option_c' => 'Blue Whale',
                'answer_option_d' => 'Lion',
                'correct_option' => 'c',
                'category_id' => 3, // Current Affairs category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => '10',
                'question_text' => 'Which country is known as the "Land of the Rising Sun"?',
                'answer_option_a' => 'China',
                'answer_option_b' => 'South Korea',
                'answer_option_c' => 'Japan',
                'answer_option_d' => 'Thailand',
                'correct_option' => 'c',
                'category_id' => 3, // Current Affairs category
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more questions here...
        ];

        // Insert the demo questions into the "questions" table
        DB::table('questions')->insert($demoQuestions);
    }
}