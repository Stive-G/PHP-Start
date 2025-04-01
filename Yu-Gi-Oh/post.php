<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Yu-Gi-Oh!</title>
</head>
<body>
<div class="inside">
    <h1>Resultat du formulaire</h1><br>
    <?php
    // Check that all information has been entered
    if (!isset($_POST['name'], $_POST['description'], $_POST['type'])) {
        echo "All fields must be filled.";
    } else {
        // Creates an array of existing cards
        $exist_cards = [["name" => "Dark Magician", "type" => "Monster", "description" => "The legendary magician is a master of dark magic."],
        ["name" => "Raigeki", "type" => "Spell", "description" => "Destroy all monsters on your opponent's field."],
        ["name" => "Mirror Force", "type" => "Trap", "description" => "Flip all of your opponent's face-down monsters face-up on the field."],
        ];
        // Get the name
        $name = $_POST['name'];
        $key = false;
        $count = count($exist_cards);// Counts the number of elements in the $exist_cards array and stores that value in a $count variable.
        $i = 0;
        //Checks if the name already exists
        while ($key === false && $i < $count) {
            if ($exist_cards[$i]['name'] === $name) {
                $key = $i;
            }
            $i++;
        }
        // If a card with this name already exists, displays its informations
        if ($key !== false) {
            echo "<h4>The card <i>{$exist_cards[$key]['name']}</i> already exists.</h4>";
            
            // Displays information for all existing cards
            echo "<h3>Existing cards:</h3>";
            foreach ($exist_cards as $card) {
                echo "<h4><i>{$card['name']}</i> - Type: {$card['type']} - Description: {$card['description']}</h4>";
            }
        } else {
            $description = $_POST['description'];
            echo "<h3>The card <i>$name</i> was successfully added!</h3>";
        }
    }
    echo "<br><br><input type='submit' onclick=\"window.location.href='index.php'\" value='Return to Form'>";
    ?>
    </div>
</body>
</html>