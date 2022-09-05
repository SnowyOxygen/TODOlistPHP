<?php
    class Question(){
        private $question = "";
        private $responses = [];
        private $correct = "";

        function __construct($question, $responses, $correct){
            $this->responses = $responses;
            $this->correct = $correct;
        }

        public function QuestionStr(){
            return $this->question;
        }
    }

    $questions = [
        new Question('2 + 2 = ?',
                    [30, 'hamburger', 5, 4],
                    5),
        new Question('Capital de France?',
                    ['Milan', 'Sainte Gemme', 'Paris'],
                    'Paris');
        new Question('How many lights are there?',
                    [2, 5, 4, 10],
                    4)
    ];
?>