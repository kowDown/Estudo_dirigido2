<?php 

print "Digte o primeiro numero: ";
    $num1 = (float) fgets(STDIN);

print "Digte o segundo numero: ";
    $num2 = (float) fgets(STDIN);

print "Digte o terceiro numero: ";
    $num3 = (float) fgets(STDIN);

    if ($num1 > $num2 && $num1 > $num3) {
        print "número um é o maior \n ";
    }

    elseif ($num2 > $num1 && $num2 > $num3) {
        print "número dois é o maior \n";
    }

    else {
        print "número tres é o maior \n";
    }

    // ---------------------menor---------------------


    if ($num1 < $num2 && $num1 < $num3){
        print "numero um é o menor"; }

    elseif ($num2 <$num1 && $num2 < $num3){
        print "numero dois é o menor";
    }

    else {
        print "numero tres é o menor";
    }
