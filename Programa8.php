<?php

print "Digte o valor do primeiro produto: ";
    $num1 = (float) fgets(STDIN);

print "Digte o valor do segundo produto: ";
    $num2 = (float) fgets(STDIN);

print "Digte o valor do terceiro produto: ";
    $num3 = (float) fgets(STDIN);


if ($num1 < $num2 && $num1 < $num3){
    print "Compre o primeiro produto"; }

elseif ($num2 <$num1 && $num2 < $num3){
    print "Compre o segundo produto";
}

else {
    print "Compre o terceiro produto";
}
