## Quiz Application

This is a command-line quiz application built using Laravel Zero. 
It offers a selection of quizzes across various categories,
including general knowledge, science and nature, history, and pop culture.
Users can take quizzes and receive scores based on their answers.

### Installation

Follow these steps to set up the quiz application on your local machine:

1. Clone the repository

 `git clone [repository-url]`
  
 `cd new-quiz-app`

2. Install dependencies
 `composer install`



### Usage
To use the application, you can run the following commands within the 
project directory:

 - List available quizzes:
  `php artisan quiz:list`
 - Take a quiz: `php artisan quiz:take {quiz_id}`

   Replace {quiz_id} with the ID of the quiz you want to take.




### Features

- **List Quizzes:** View all available quizzes to choose from.
- **Take a Quiz:** Select a quiz by its ID and answer multiple-choice questions to test your knowledge.
- **Score Calculation:** Receive instant feedback on your performance at the end of each quiz.


## License

Laravel Zero is an open-source software licensed under the MIT license.
