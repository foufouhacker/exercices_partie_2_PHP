<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
/* exercice 1 */ 
    $age = 18;
if ($age >= 18) { 
    echo (" Vous êtes majeur");
} else {
    echo ("Vous êtes mineur");
}
/* exercice 2 */

$age = 18;
$gender = 'Homme';

$age = 18;
if ($age >= 18 && $gender == 'Homme') { 
    echo (" Vous êtes un Homme majeur");
} else if($age < 18 && $gender == 'Homme') {
    echo ("Vous êtes un Homme mineur");
} else if($age >= 18 && $gender == 'Femme'){
    echo ('vous êtes une Femme majeure');
} else {
    echo ( 'vous êtes une Femme mineure');
}
/* exercice 3 */

$gender = 'Homme';

if ($gender == 'Homme') {
    echo ('C\'est un développeur !!!');
} else {
   echo ('C\'est une développeuse !!!');
}

/* exercice 3 */

$age = 18;
if ($age >= 18) {
    echo ('Vous êtes majeur');
} else {
   echo ('Vous êtes mineur');
}

?>
    
</body>
</html>