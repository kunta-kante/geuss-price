<?php

$word = "tout";
$splitWord = str_split($word);
$bars = [];

for ($i = 0; $i < count($splitWord); $i++) {
  $bars[] = "_";
}

echo implode(" ", $bars);
echo "\n\n";
$fail = [];

// bars <- ["t", " ", "o", " ", "u", " ", "t"]
// splitWord <- ["t", "o", "u", "t"]
// word <- "tout"
// implode("", $bars) <- "t o u t"
//tant que le joueur n'a ni gangné ni perdu on joue
while (implode($bars) !== $word && $word($fail) < 4) {
  $guessedLetter = readline("Entrez une lettre : ");

  if (in_array($guessedLetter, $splitWord) === true) {
    $positions = array_keys($splitWord, $guessedLetter);

    foreach ($positions as $position) {
      $bars[$position] = $guessedLetter;
    }
    echo implode(" ",$bars);
    echo "\n";
  } else {
    if(!in_array($guessedLetter, $fail)){
      $fail = $guessedLetter;
    }
    echo implode(",", $fail);
    echo "non\n";
  }
}


