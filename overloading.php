<?php

class Message {

    public function displayMessage($word) {
        echo '<p>Ma fonction avec un paramètre : ' . $word . '</p>';
    }

    public function displayMessage($word1, $word2) {
        echo '</p>Ma fonction avec deux paramètres : ' . $word1 . ' ' . $word2 . '</p>';
    }
}

?>