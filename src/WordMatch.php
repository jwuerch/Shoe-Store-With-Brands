<?php

    class WordMatch {

      function checkMatch($word, $phrase) {
        $phrase = explode(' ', $phrase);
        $counter = 0;
        foreach ($phrase as $each_word) {
          if ($each_word == $word) {
            $counter++;
          }
        }
        return $counter;

      }



    }

?>