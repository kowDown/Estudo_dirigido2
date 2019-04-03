<?php

    Print "digite o número: ";
    $numero = fgets (STDIN);

    if ($numero > 0) {
        print "o Número desejado é Positivo ";
    }

    elseif ($numero < 0) {

        print "O Valor é negativo " ;

    }

    else {
        print "o número é zero" ;
    }
