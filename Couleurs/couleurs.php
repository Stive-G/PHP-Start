<?php
function guessColor() {
    // Defines a color table and our colors
    $colors = ["Rouge", "Vert", "Bleu", "Jaune", "Violet"];
    $red = "\033[31m";
    $green = "\033[32m";
    $blue = "\033[34m";
    $yellow = "\033[33m";
    $purple = "\033[35m";
    $reset = "\033[0m";

    // Selects a random color from the table
    $hiddenColor = $colors[array_rand($colors)];
    
    // Displays colors as a numbered list
    echo "Devinez la couleur cachée parmi les options suivantes :\n";
    echo " $red Rouge\n $green Vert\n $blue Bleu\n $yellow Jaune\n $purple Violet\n $reset";
    
    // Reads user input
    $guess = readline("Ecrire votre choix par rapport aux couleurs ci-dessus : ");
    
    // Comparison of the chosen color with the hidden color
    if ($guess == $hiddenColor) {
        // Display a success message if the color is correct
        echo "Bravo ! Vous avez trouvé la couleur cachée : " .$hiddenColor."\n";
    } else {
        // Displays a failure message and restart the function if the color is incorrect
        echo "Dommage, votre choix ne correspond pas à la couleur cachée.\n";
        guessColor();
    }
}
// Launches the function to play the game
guessColor();
?>