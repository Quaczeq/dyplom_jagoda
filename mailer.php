<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "klak.marcin@plywajmy.plpl";


    $imie_nazwisko = $_POST["imie_nazwisko"];
    $e-mail = $_POST["e-mail"];
    $zapytanie = $_POST["zapytanie"];

    $subject = "Nowe zapytanie od $imie $nazwisko";
    $message = "Imię: $imie\nNazwisko: $nazwisko\n\nTreść zapytania:\n$zapytanie";

    $headers = "From: $imie $nazwisko <marcin.klak@plywajmy.pl>";

    if (mail($to_email, $subject, $message, $headers)) {
        echo "Wiadomość została wysłana pomyślnie.";
    } else {
        echo "Wystąpił problem podczas wysyłania wiadomości.";
    }
}

?>
