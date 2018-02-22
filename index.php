<?php
    include_once 'header.php';
?>
        <section class="main-container">
            <div class="main-wrapper">
                <h2>Home</h2>
                <?PHP
                if (isset($_SESSION['l_id'])) {
                    echo "You are logged in!";
                }
                ?>
            </div>
        </section>
<?php
    include_once 'footer.php';
?>

<!--
Wat is een PHP-sessie?
Wanneer u met een toepassing werkt, opent u deze, voert u enkele wijzigingen uit en vervolgens sluit u deze.
Dit lijkt veel op een sessie. De computer weet wie je bent. Het weet wanneer u de toepassing start en wanneer u eindigt.
Maar op het internet is er één probleem: de webserver weet niet wie je bent of wat je doet, omdat het HTTP-adres niet in stand blijft.

Sessievariabelen lossen dit probleem op door gebruikersinformatie op te slaan voor gebruik op meerdere pagina's (bijv. Gebruikersnaam, favoriete kleur, enz.).
Standaard duren sessievariabelen tot de gebruiker de browser sluit.

Zo; Sessievariabelen bevatten informatie over één enkele gebruiker en zijn beschikbaar voor alle pagina's in één applicatie.


Een sessie wordt gestart met de functie session_start ().

Sessievariabelen worden ingesteld met de globale PHP-variabele: $ _SESSION
Opmerking: de functie session_start () moet het eerste zijn in uw document. Vóór om het even welke HTML-tags.
Gebruik session_unset () en session_destroy () om alle globale sessievariabelen te verwijderen en de sessie te vernietigen

Hoe werkt het? Hoe weet het dat ik het ben? 

In de meeste sessies wordt een gebruikerssleutel ingesteld op de computer van de gebruiker die er ongeveer zo uitziet: 765487cf34ert8dede5a562e4f3a7e12.
Wanneer een sessie vervolgens op een andere pagina wordt geopend, wordt de computer gescand op een gebruikerssleutel. Als er een overeenkomst is, wordt deze sessie geopend.
Zo niet, dan wordt een nieuwe sessie gestart.-->

<!--include_once 
(PHP 4, PHP 5, PHP 7)

De include_once- instructie omvat en evalueert het opgegeven bestand tijdens de uitvoering van het script. Dit is een gedrag dat vergelijkbaar is met de instructie include ,
met als enige verschil dat als de code van een bestand al is opgenomen, deze niet opnieuw wordt opgenomen en include_once returns bevat TRUE. Zoals de naam al doet vermoeden,
wordt het bestand slechts een keer opgenomen.

include_once kan worden gebruikt in gevallen waarin hetzelfde bestand meerdere keren tijdens een bepaalde uitvoering van een script kan worden opgenomen en geëvalueerd,
dus in dit geval kan dit helpen problemen zoals functieherdefinities, herplaatsingen van variabele waarden, etc. te voorkomen.-->

<!--isset
(PHP 4, PHP 5, PHP 7)

isset - Bepaal of een variabele is ingesteld en dat niet isNULL

Beschrijving ¶
bool isset ( mixed $var [, mixed $... ])
Bepaal of een variabele is ingesteld en dat niet is NULL.

Als een variabele is uitgeschakeld met unset () , is deze niet langer ingesteld. isset () keert terug FALSEals een variabele wordt getest die is ingesteld op NULL.
Merk ook op dat een nul-teken ( "\ 0" ) niet gelijk is aan de PHP- NULLconstante.

Als er meerdere parameters worden opgegeven , retourneert isset ()TRUE alleen als alle parameters zijn ingesteld.
Evaluatie gaat van links naar rechts en stopt zodra een niet-ingestelde variabele wordt aangetroffen.-->