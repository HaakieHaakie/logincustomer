<?php
if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $db_col2 = mysqli_real_escape_string($conn, $_POST['db_col2']);
    $db_col3 = mysqli_real_escape_string($conn, $_POST['db_col3']);
//    $db_col4 = mysqli_real_escape_string($conn, $_POST['B2B_code']);
    //Error handlers
    //Check for empty fields
    if (empty($db_col2) || empty($db_col3)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    } else {
        //Ceck if input characters are valid
        if (!preg_match("/^[\sa-zA-Z]*$/", $db_col2)) {
            header("Location: ../signup.php?signup=invalid");
            exit();
        } else {
            $sql = "SELECT * FROM $db_tablel1 WHERE login_username='$db_col2'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                header("Location: ../signup.php?signup=usertaken");
                exit();
            } else {
                //Hashing the password
                $hashedPwd = password_hash($db_col3, PASSWORD_DEFAULT);
                //Insert the user into the database
                $sql = "INSERT INTO $db_tablel1 (login_username, login_pwd) VALUES ('$db_col2', '$hashedPwd');";
                mysqli_query($conn, $sql);
                header("Location: ../signup.php?signup=success");
                exit();
            }
        }
    }
} else {
    header("Location: ../signup.php");
    exit();
}


//Beschrijving 
//string mysql_real_escape_string ( string $unescaped_string [, resource $link_identifier= NULL ])
//Ontsnapt aan speciale tekens in de unescaped_string, rekening houdend met de huidige tekenset van de verbinding,
//        zodat het veilig is om het in een mysql_query () te plaatsen . Als binaire gegevens moeten worden ingevoegd, moet deze functie worden gebruikt.
//
//mysql_real_escape_string () roept de MySQL-bibliotheekfunctie mysql_real_escape_string aan,
//        die backslashes omspant naar de volgende tekens: \ x00 , \ n , \ r , \ , ' , " en \ x1a .
//
//Deze functie moet altijd (op enkele uitzonderingen na) worden gebruikt om gegevens veilig te maken voordat een query naar MySQL wordt verzonden.
//Definitie en gebruik
//De functie header () verzendt een onbewerkte HTTP-header naar een client.
//
//Het is belangrijk om op te merken dat header () moet worden aangeroepen voordat een daadwerkelijke uitvoer wordt verzonden
//        (in PHP 4 en hoger, kunt u uitvoerbuffering gebruiken om dit probleem op te lossen):
//
//<html>
//<?php
//// This results in an error.
//// The output above is before the header() call
//header('Location: http://www.example.com/');
//
?>

<!--password_hash
(PHP 5> = 5.5.0, PHP 7)

password_hash - Creëert een wachtwoord-hash

Beschrijving ¶
string password_hash ( string $password , int $algo [, array $options ])
password_hash () maakt een nieuwe wachtwoordhash aan met behulp van een krachtig hash-algoritme voor eenrichtingsverkeer.
password_hash () is compatibel met crypt () . Daarom kunnen wachtwoord hashes gemaakt door crypt () gebruikt worden met password_hash () .

De volgende algoritmen worden momenteel ondersteund:

PASSWORD_DEFAULT- Gebruik het bcrypt-algoritme (standaard vanaf PHP 5.5.0).
Merk op dat deze constante is ontworpen om in de loop van de tijd te veranderen als er nieuwe en sterkere algoritmen aan PHP worden toegevoegd.
Om die reden kan de lengte van het resultaat van het gebruik van deze identifier in de loop van de tijd veranderen. 
Daarom wordt aanbevolen om het resultaat op te slaan in een databasekolom die groter is dan 60 tekens (255 tekens zou een goede keuze zijn).
PASSWORD_BCRYPT- Gebruik het CRYPT_BLOWFISHalgoritme om de hash te maken. 
Dit levert een standaard crypt () -compatibele hash op met de identificatiecode "$ 2y $". Het resultaat is altijd een tekenreeks van 60 tekens of een FALSEfout.
PASSWORD_ARGON2I - Gebruik het hash-algoritme van Argon2 om de hash te maken.-->

<!--filter_var
(PHP 5> = 5.2.0, PHP 7)

filter_var - Filtert een variabele met een opgegeven filter

Beschrijving ¶
mixed filter_var ( mixed $variable [, int $filter= FILTER_DEFAULT [, gemengd $options ]])
Parameters ¶
variable
Waarde om te filteren. Houd er rekening mee dat scalaire waarden intern naar een tekenreeks worden geconverteerd voordat ze worden gefilterd.

filter
De ID van het filter dat moet worden toegepast. De handboekpagina Typen filters bevat de beschikbare filters.

Indien weggelaten, FILTER_DEFAULTzal worden gebruikt, wat gelijkwaardig is aan FILTER_UNSAFE_RAW. Hierdoor wordt standaard niet gefilterd.

options
Associatieve array van opties of bitwise disjunctie van vlaggen. Als filter opties accepteert, 
kunnen vlaggen worden voorzien in het veld "flags" van array. Voor het "callback" -filter moet het opvraagbare type worden doorgegeven.
De callback moet één argument accepteren, de te filteren waarde en de waarde retourneren na filtering / opschoning.-->

<!--preg_match
(PHP 4, PHP 5, PHP 7)

preg_match - Voer een expressie voor reguliere expressies uit

Beschrijving ¶
int preg_match ( string $pattern , string $subject [, array &$matches [, int $flags= 0 [, int $offset= 0 ]]])
Zoekt subjectnaar een overeenkomst met de reguliere expressie die is opgegeven pattern.

Parameters ¶
pattern
Het patroon waarnaar moet worden gezocht, als een tekenreeks.

subject
De invoerreeks.

matches
Als matcheswordt opgegeven, wordt deze gevuld met de zoekresultaten.
$ matches [0] bevatten de tekst die overeenkomt met het volledige patroon,
$ matches [1] hebben de tekst die overeenkomt met het eerste vastgelegde patroon met helften, enzovoort.

flags
flags kan de volgende vlag zijn:

PREG_OFFSET_CAPTURE
Als deze vlag wordt gepasseerd, wordt voor elke voorkomende overeenkomst ook de bijbehorende tekenreeksoffset geretourneerd.
Merk op dat dit de waarde van matchesin een array verandert waarbij elk element een array is bestaande
uit de overeenkomende string bij offset 0 en de tekenreeks verschoven naar subjectoffset 1 .-->
