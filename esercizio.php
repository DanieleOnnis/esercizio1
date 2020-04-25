< ? Php
    // Inizio tabella
    echo '<table class="tavola-pitagora">';
    for ($i=1; $i<=10; $i++) {
    // Inizio riga
        echo '<tr>';
        for ($j=1; $j<=10; $j++) {
    // Stampa cella con il valore calcolto come prodotto $i*$j
            echo '<td>' . $i*$j . '</td>';
        }
    // Fine riga
        echo '</tr>';
    }
    echo '</table>';
    // Fine tabella
?>