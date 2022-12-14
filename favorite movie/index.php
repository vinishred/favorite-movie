<?php

function greetings (string $name, int $age, array $favoriteMovie = [])
  {
    echo 'Bonjour,<br> je m\'appelle '.$name. ' et j\'ai '.$age.' ans.<br>';
    if ($favoriteMovie)
    {
      echo 'J\'ai '.count($favoriteMovie).' films favoris, il s\'agit de '.implode(',', $favoriteMovie). '.<br>';
    } else 
    {
      echo 'Je n\'ai pas de film favori.<br>';
    }
    echo ' la fonction a été exécutée ' .countGreetings(). ' fois !<br>';
  };
function countGreetings ()
  { static $number= 0;
    return ++$number;
      };
greetings ('Elodie', 39,['Dirty Dancing', 'Le grand bleu', 'Le premier jour du reste de ta vie']);
greetings ('Vince', 40);