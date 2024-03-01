<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $var = 'Mario Rossi';
        echo '<h1>Ciao a tutti</h1>'; 
        echo $var;
    ?>

    <h2><?='Corso php'?></h2>
    <h2><?=$var?></h2>

    <?php
        // var_dump($var); // Stampa contenuto e tipo della variabile

        // Boolean
        $bool = true;
        var_dump($bool); 
        // Number (Int, Float)
        $numInt = 25;
        var_dump($numInt);
        $numFlo = 5.5;
        var_dump($numFlo);
        // String
        $str = "Sono una stringa";
        var_dump($str);

        // Costante in PHP
        // può essere definita fuori da una classe
        define('C', 'Sono una costante Define', );
        // Da PHP 8 è stata introdotta anche Const
        // definire una costante anche in una classe
        const CC = 'Sono una costante Const';

        // Concatenazione di stringhe in PHP
        $name = 'Mario';
        $lastname = 'Rossi';
        $fullname = '<h4>' . $name . ' ' . $lastname . '</h4>';
        // print è equivalente ad echo stampa una string a video
        print $fullname;

        // Array in PHP
        $arr1 = array();
        var_dump($arr1);
        $arr2 = [];
        var_dump($arr2);

        print('<br>');

        $arr1 = array('uno', 'due', 'tre');
        $arr2 = ['uno', 'due', 'tre'];
        $arr2[10] = 'altro'; // Aggiunge un elemento nell'indice 10
        $arr2[] = 'nuovo'; // Aggiunge un elemento in coda
        $arr2['pippo'] = 'Ciao sono Pippo';  // Aggiunge un elemento nell'indice pippo

        print '<p>' . $arr2[1] . '</p>';
        echo '<p>' . $arr2[2] . '</p>';

        unset($arr2[1]); // Rimuove un elemento in un indice specifico di un array

        echo count($arr2); // Restituisce il numero di elementi contenuti in un array
        
        // print_r stampa a video il contenuto di un array
        print_r($arr2);

        unset($arr2); // Rimuovo completamente un array
        

        // Array bidimensionale o matrice
        $matrix = [];
        $matrix['Nomi'] = [5, 3];
        $matrix['Citta'] = [4, 6, 9];
        $matrix['Cose'] = [4, 6, 9];

        echo $matrix['Nomi'][1];

        $matrix = [[], [], []]; // Array bidimensionale
        $matrix = ['Nomi' => [5, 3], 'Citta' => [4, 6, 9], 'Cose' => [4, 6, 9]];

        // Esempio ciclo for
        echo '<ul>';
        for($i=0; $i < count($matrix); $i++) {
            echo '<li>Sono il valore ' . $i . '</li>';
        }
        echo '</ul>';

        // Esempio ciclo foreach
        $mioArr = ['abc' => 25, 'fge' => 49];

        foreach ($mioArr as $key => $value) {
            echo '<li>Sono il valore di ' . $key . ' => ' . $value . '</li>';
        }

        if(count($mioArr) > 0 ) {
            echo '$mioArr > 0';
        }

    ?>

</body>
</html>