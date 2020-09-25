<?php

class Message {

    function __call($name, $argument){
    if($name == 'displayMessage') {
        swicth(count($argument)){
            case 0 : return 0;
            case 1 : return displayMessage1($argument[0]);
            case 2 : return displayMessage2($argument[0], $argument[1]);
        }
    }
}

    public function displayMessage1($word) {
        echo '<p>Ma fonction avec un paramètre : ' . $word . '</p>';
    }

    public function displayMessage2($word1, $word2) {
        echo '</p>Ma fonction avec deux paramètres : ' . $word1 . ' ' . $word2 . '</p>';
    }
}

?>