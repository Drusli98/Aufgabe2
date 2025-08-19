<?php
$filme = [
    [
        'titel' => 'Spider-Man: No Way Home',
        'genre' => 'Action',
        'dauer' => 148,
        'altersfreigabe' => '12',
        'preis' => 12.50,
        'bewertung' => 5
    ],
    [
        'titel' => 'Der König der Löwen',
        'genre' => 'Animation',
        'dauer' => 88,
        'altersfreigabe' => '0',
        'preis' => 8.50,
        'bewertung' => 4
    ],
    [
        'titel' => 'Hangover',
        'genre' => 'Komödie',
        'dauer' => 100,
        'altersfreigabe' => '16',
        'preis' => 9.00,
        'bewertung' => 4
    ],
    [
        'titel' => 'Forrest Gump',
        'genre' => 'Drama',
        'dauer' => 142,
        'altersfreigabe' => '12',
        'preis' => 10.00,
        'bewertung' => 5
    ],
    [
        'titel' => 'Es',
        'genre' => 'Horror',
        'dauer' => 135,
        'altersfreigabe' => '16',
        'preis' => 11.00,
        'bewertung' => 3
    ],
    [
        'titel' => 'Avengers: Endgame',
        'genre' => 'Action',
        'dauer' => 181,
        'altersfreigabe' => '12',
        'preis' => 13.50,
        'bewertung' => 5
    ],
    [
        'titel' => 'Toy Story 4',
        'genre' => 'Animation',
        'dauer' => 100,
        'altersfreigabe' => '0',
        'preis' => 7.50,
        'bewertung' => 4
    ],
    [
        'titel' => 'Knives Out',
        'genre' => 'Drama',
        'dauer' => 130,
        'altersfreigabe' => '12',
        'preis' => 9.50,
        'bewertung' => 4
    ],
    [
        'titel' => 'Scary Movie',
        'genre' => 'Komödie',
        'dauer' => 88,
        'altersfreigabe' => '16',
        'preis' => 8.00,
        'bewertung' => 3
    ],
    [
        'titel' => 'The Conjuring',
        'genre' => 'Horror',
        'dauer' => 112,
        'altersfreigabe' => '16',
        'preis' => 10.50,
        'bewertung' => 4
    ]
];

// TODO: Hole die Filterwerte aus der URL
// Verwende $_GET um folgende Parameter zu erfassen:
// - 'genre' (falls vorhanden)
// - 'max_dauer' (falls vorhanden) - maximale Filmlänge
// - 'max_preis' (falls vorhanden) - maximaler Ticketpreis
// - 'mindest_bewertung' (falls vorhanden)

$genre_filter = $_GET['genre']??''; // TODO: Implementiere die $_GET Logik
$max_dauer = 0; // TODO: Implementiere die $_GET Logik
$max_preis = 0; // TODO: Implementiere die $_GET Logik
$mindest_bewertung = 0; // TODO: Implementiere die $_GET Logik

// TODO: Filtere das $filme Array basierend auf den GET-Parametern
// Erstelle ein neues Array $gefilterte_filme
//
// Hinweise:
// - Verwende eine foreach-Schleife
// - Prüfe für jeden Filter, ob er angewendet werden soll
// - Nur Filme, die alle aktiven Filter erfüllen, sollen im Ergebnis sein
//
// Beispiel-Logik:
// foreach ($filme as $film) {
//     $erfuellt_filter = true;
//
//     // Prüfe ob Genre-Filter erfüllt ist
//     if (!empty($genre_filter) && $film['genre'] !== $genre_filter) {
//         $erfuellt_filter = false;
//     }
//
//     // Weitere Filter prüfen...
//
//     if ($erfuellt_filter) {
//         $gefilterte_filme[] = $film;
//     }
// }

$gefilterte_filme = []; // TODO: Implementiere die Filterlogik hier

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kinoprogramm</title>
</head>
<body>
    <h1>🎬 Kinoprogramm Heute</h1>

    <p>
        <h3>🔍 Filter</h3>
        <!-- TODO: Erstelle ein HTML-Formular für die Filter -->
        <!-- Das Formular soll folgende Eingabefelder haben:
         1. Dropdown für Genre (name="genre")
            - Optionen: "", "Action", "Komödie", "Drama", "Horror", "Animation"
         2. Zahlenfeld für maximale Filmlänge in Minuten (name="max_dauer")
         3. Zahlenfeld für maximalen Ticketpreis (name="max_preis", step="0.50")
         4. Dropdown für Mindestbewertung (name="mindest_bewertung")
            - Optionen: 0, 1, 2, 3, 4, 5
         5. Submit-Button "Filter anwenden"

         Wichtig:
         - Verwende method="GET"
         - Setze die value-Attribute der Felder auf die aktuellen Filterwerte
         - Füge einen "Alle Filter zurücksetzen" Button hinzu
        -->

    </p>

    <p>
        <?php
        // TODO: Zeige die Anzahl der gefundenen Filme an
        // Beispiel: "Es wurden X Filme gefunden"
        ?>


        <?php
        // TODO: Durchlaufe das $gefilterte_filme Array und zeige jeden Film an
        // Verwende eine foreach-Schleife
        //
        // Für jeden Film sollen folgende Informationen angezeigt werden:
        // - Titel des Films (als Überschrift h3)
        // - Genre als farbiger Tag
        // - Filmlänge (z.B. "Dauer: 120 Min.")
        // - Altersfreigabe (z.B. "FSK: 12")
        // - Ticketpreis (z.B. "9,50 €")
        // - Bewertung als Sterne (★★★★☆)

        // TODO: Implementiere die Ausgabe hier

        ?>

        <?php
        // TODO: Falls keine Filme gefunden wurden, zeige eine entsprechende Meldung an
        // Zeige eine freundliche Nachricht wie: "Leider wurden keine Filme gefunden. Probieren Sie andere Filter."
        ?>

    </p>
</body>
</html>
