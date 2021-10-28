<?php

class Bot {

    private $name = 'ChatBot PHP';

    public function getName() {
        return $this->name;
    }

    
    private function getHelp($data) {
        $return = null;
        foreach($data as $key => $value) {
            if($key != 'help') {
                $return .= $key . PHP_EOL;

            }
            return $return;
        }
    }



    public function getQuestion($value, $questionsAnswersList) {
        $value = trim($value); #remove the space before and after
        foreach ($questionsAnswersList as $question => $answer) {
            if($value == $question) {
                if(gettype($answer) == 'array') {
                    return $this->getHelp($questionsAnswersList) . $this->getHelp($answer);
                } else {
                    return $answer;
                }
            }
        }

    } 
}


