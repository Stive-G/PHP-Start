<?php
function startGame() {
    // Here we have our colors
    $red = "\033[31m";
    $blue = "\033[34m";
    $yellow = "\033[33m";
    $orange = "\033[38;5;208m";
    $reset = "\033[0m";

    // Displays welcome message and options
    echo "Welcome in The Walking Dead Game! Que voulez-vous faire?\n";
    echo $blue." 1. Se promener" .$reset." \n";
    echo $yellow. " 2. Chercher de la nourriture" .$reset. "\n";
    echo $orange. " 3. Trouver un abri" .$reset. "\n";
    echo $red. " 4. Quitter le jeu" .$reset. "\n";

    // Asks the user to choose an option
    $choix = (int)readline("Entrez le numéro de l'option que vous voulez choisir : ");

    // If the user chooses the first option
    if ($choix == 1) {
        // Displays random message
        $messages = [
            "$blue Vous marchez pendant une heure et ne trouvez rien d'intéressant.$reset",
            "$blue Vous tombez sur un groupe de zombies affamés. Vous réussissez à vous enfuir en courant.$reset",
            "$blue Vous trouvez une boîte de conserve abandonnée. Vous la prenez et continuez votre chemin.$reset"];
        $random_message = $messages[array_rand($messages)];
        echo $random_message . "\n";
    }
    // If the user chooses the second option
    elseif ($choix == 2) {
        // Displays random message
        $messages = [
            "$yellow Vous fouillez les maisons et les magasins, mais ne trouvez rien à manger.$reset",
            "$yellow Vous trouvez un jardin potager abandonné. Vous récoltez quelques légumes pour votre prochain repas.$reset",
            "$yellow Vous tombez sur un groupe de zombies affamés alors que vous fouillez un supermarché. Vous réussissez à vous enfuir en courant, mais vous n'avez pas trouvé de nourriture.$reset"];
        $random_message = $messages[array_rand($messages)];
        echo $random_message . "\n";
    }
    // If the user chooses the third option
    elseif ($choix == 3) {
        // Displays random message
        $messages = [
            "$orange Vous trouvez une maison abandonnée et décidez de vous y installer pour la nuit.$reset",
            "$orange Vous cherchez un abri pendant des heures, mais ne trouvez rien de convenable.$reset",
            "$orange Vous tombez sur un groupe de survivants qui vous accueillent à bras ouverts dans leur abri.$reset"];
        $random_message = $messages[array_rand($messages)];//Choose a random message from the list of messages
        echo $random_message . "\n";
    }
    // If the user chooses the fourth option 
    elseif ($choix == 4) {
        // Displays a goodbye message and end the program
        echo "$red Goodbye! $reset\n";
        exit();
    }
    // If the user enters an invalid choice
    else {
        echo "$red Choix invalide. Veuillez entrer un numéro valide.$red \n";
    }
}
// Infinite loop that calls the startGame function on each iteration
while (true) {
    startGame();
}
?>