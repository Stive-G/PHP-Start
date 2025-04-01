<?php
// Function to draw the Hangman
function Hangman($numParts) {
    // Definition of parts of hangman in tabular form
    $hangmanParts = array(
        "  ____\n |    |\n |    O\n |   /|\\\n |   / \\\n_|_\n", // Complete Hangman
        "  ____\n |    |\n |    O\n |   /|\\\n |   /\n_|_\n", // Hangman with 4 parts
        "  ____\n |    |\n |    O\n |   /|\\\n |\n_|_\n", // Hangman with 3 parts
        "  ____\n |    |\n |    O\n |   /|\n |\n_|_\n", // Hangman with 2 parts
        "  ____\n |    |\n |    O\n |    |\n |\n_|_\n", // Hangman with 1 part
        "  ____\n |    |\n |    O\n |\n |\n_|_\n", // Hanged with the rope
        "  ____\n |    |\n |\n |\n |\n_|_\n", // Hanged empty
    );
    // Display of the corresponding part of the hangman
    echo $hangmanParts[$numParts];
}
// Function to initialize letter grid with underscores
function initLetterGrid($word) {
    $letterGrid = [];
    for ($i = 0; $i < strlen($word); $i++) {
        $letterGrid[] = "_";
    }
    return $letterGrid;
}
// Defining the function to display the letter grid
function displayLetterGrid($grid) {
    // Path of each letter of the grid, display of the letter followed by a space
    foreach($grid as $letter) {
        echo $letter." ";
    }
    echo "\n";
}
// Function def to check if a letter is in the word and update the letter grid
function checkLetter($letter, $word, $grid, $numParts) {
    $found = false;         // Initialization of the variable which indicates if the letter was found in the word
    $newGrid = $grid;
    $wordLength = strlen($word);        //leng of the word

    // Path through each character of the word
    for ($i = 0; $i < $wordLength; $i++) {
        $char = $word[$i];          // Retrieving the character at index $i of the word

        // If the letter entered corresponds to the character of the word at index $i
        if ($char === $letter) {
            $newGrid[$i] = $letter;
            $found = true;
        }
    }
   // If the letter was not found in the word, increase the number of Hangman parts to display
    if (!$found) {
        $numParts++;
    }
    return array($newGrid, $numParts); // Returns the new grid of letters and the number of parts of hangman to display
}

// Initialization of the word to guess and the grid of letters
$word = "bonjour";
$letterGrid = initLetterGrid($word);
$numHangmanParts = 0;

// Main game loop
while (true) {
    // Clears the console and displays the image of the hanged man
    system("cls");
    Hangman($numHangmanParts);
    
    // Displays the letter grid
    displayLetterGrid($letterGrid);
    
    // Asks the user to enter a letter
    $letter = readline("Entrez une lettre : ");
    
    // Checks if the letter is present in the word and updates the grid
    list($newGrid, $numHangmanParts) = checkLetter($letter, $word, $letterGrid, $numHangmanParts);
    $letterGrid = $newGrid;
    
    // And Finally Checks if the user Won or Lost
    if ($letterGrid === str_split($word)) {
        echo "Bravo, vous avez gagné !\n";
        break;
    } elseif ($numHangmanParts >= 6) {
        echo "Dommage, vous avez perdu. Le mot était : $word\n";
        break;
    }
}
?>
