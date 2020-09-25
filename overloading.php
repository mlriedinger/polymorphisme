<?php

class Message {

    public function displayMessage($word) {
        echo '<p>Ma fonction avec un paramètre : ' . $word . '</p>';
    }

    public function displayMessage($word1, $word2) {
        echo '</p>Ma fonction avec deux paramètres : ' . $word1 . ' ' . $word2 . '</p>';
    }
}

// class Message {

//     function __call($name, $argument){
//     if($name == 'displayMessage') {
//         switch(count($argument)){
//             case 1 : return $this->displayMessage1($argument[0]);
//             case 2 : return $this->displayMessage2($argument[0], $argument[1]);
//         }
//     }
// }

//     public function displayMessage1($word) {
//         echo '<p>Ma fonction avec un paramètre : ' . $word . '</p>';
//     }

//     public function displayMessage2($word1, $word2) {
//         echo '</p>Ma fonction avec deux paramètres : ' . $word1 . ' ' . $word2 . '</p>';
//     }
// }

?>