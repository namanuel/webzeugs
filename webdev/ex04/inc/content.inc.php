<?php



switch (@$_GET['selectedMenu']) {
    case 'Home':
        include("sites/home.php");
        break;

    case 'Schlafzimmer':
        include("sites/schlafzimmer.php");
        break;

    case 'Wohnzimmer':
        include("sites/wohnzimmer.php");
        break;

    case 'Esszimmer':
        include("sites/esszimmer.php");
        break;

    case 'Küche':
        include("sites/kueche.php");
        break;

    case 'Außenbereich':
        include("sites/aussenbereich.php");
        break;

    case 'Kontakt':
        include("sites/kontakt.php");
        break;

    case 'Impressum':
        include("sites/impressum.php");
        break;

    default:
        echo "<div class='container'><p> Bitte wählen Sie aus oberer Navigation aus!</p></div>";
        break;
}

?>