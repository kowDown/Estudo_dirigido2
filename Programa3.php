<?php
   

    Print "digite UMA letra: ";

    $sexo = (string) Fgets(STDIN);

    $Male= 'M';
    $Female= 'F';

    if ((strcasecmp($sexo, $Male)) ==2)

    {print "sexo masculino";
    exit;}

    if ((strcasecmp($sexo, $Female))!=-7 and (strcasecmp($sexo, $Female))==2)
  {print "Sexo feminino";}

  
   else  {print "Sexo inválido";}
