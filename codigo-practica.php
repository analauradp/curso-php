<?php 
$name = "Miguel"; #las comillas simples no permiten la interpolación de cadenas
/*variable con el signo de $, no puede iniciar con un númeo o símbolos ni repetir el $*/ 
$isDev = true;
$age = (bool) 44; #fuerza la transformación a un booleano
$newAge = $age + '1';
$isOld = !$isDev && $age > 40; #operadores booleanos

define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png'); #Constante global que no se puede declarar dos veces

$output = "Hola \$name, con una edad de $age."; #interpolación de cadenas y escapar el $ con la contrabarra
const NOMBRE = "Miguel"; #constante local
?>
<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200" height="200"> #etiqueta de imagen con la constante global
<?php
var_dump($name); #dice el tipo de dato y valor en el navegador
var_dump($isDev);
var_dump($age);

is_string($newAge); #verifican variables
is_bool($isDev);
is_int($age);

$output = "Hola $name";  #otra forma de concatenar utilizando .=
$output .= ", con una edad de $age.";
?>
<h1>
    <?= $output ?>
</h1>
<h1> 
<?= "Hola " . $name . ", <br/> con una edad de " . $age; ?> 
</h1>
<style>
    :root {
        color-scheme: light dark;
    }
    body {
        display: grid;
        place-content: center;
    }
</style>

<?php
/*
if ($isOld) {
    echo "<h2>Eres viejo</h2>";
}elseif ($isDev) { #elseif se puede colocar junto
    echo "<h2>Eres desarrollador</h2>";
} else {
    echo "<h2>Eres joven</h2>";
}
    */
?> 
<?php if ($isOld): #sintaxis alternativa al código de arriba ?>
    <h2>Eres viejo</h2>
<?php elseif ($isDev): ?>
    <h2>Eres desarrollador</h2>
<?php else: ?>
    <h2>Eres joven</h2>
<?php endif; ?>

<?php
$name  = 'Miguel';
$isDev = true;
$age = 78;
#expresión match en PHP

$output = "Hola $name, con una edad de $age.";
$$outputAge = match (true) {
    $age < 2    => "Eres un bebé, $name",
    $age < 10   => "Eres un niño, $name",
    $age < 18   => "Eres un adolescente, $name",
    $age === 18 => "Eres mayor de edad, $name",
    $age < 40   => "Eres un adulto joven, $name",
    $age < 60   => "Eres un adulto viejo, $name",
    default     => "Hueles más a madera que a fruta, $name",
};

#Arrays en PHP
$bestLanguages = ["PHP", "JavaScript", "Python", 1, 2]; #pueden contener cualquier tipo de dato.
$bestLanguages[3] = "Java"; #modificar un valor
$bestLanguages[] = "TypeScript"; #agregar un valor
?>
<h3>
    El mejor lenguaje es <?= $bestLanguages[5] #posición 5 asignada como TypeScript ?>
</h3>

# Iterar los arrays (repetir un segmento de código dentro de un programa)
Para sacar el índice en este caso de language utilizamos key 
<ul> 
    <?php foreach ($bestLanguages as $key => $language): ?>
        <li><?= $key . " " . $language ?></li> #concatenando el índice
    <?php endforeach; ?>
</ul>

