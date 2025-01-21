<?php
// Definició de variables
$integer = 10;
$double = 20.5;
$string = "Hello, world!";
$boolean = true;

// Impressió de les variables
echo "Integer: " . $integer . "<br>";
echo "Double: " . $double . "<br>";
echo "String: " . $string . "<br>";
echo "Boolean: " . ($boolean ? 'true' : 'false') . "<br>";

define("NOM", "Guillem Gaona");

// Mostrar la constant en format títol
echo "<h1>" . NOM . "</h1>";

// EX 2

// Convertir a majúscules
$mayus = strtoupper($string);
echo $mayus . "<br>";

// Mida variable
$length= strlen($string);
echo "La mida és de: " . $length . " caràcters. <br>";

// String a l'invers
$revers= strrev($string);
echo "La frase al revés és: " . $revers . "<br>";

// Nova variable + concatenació
$new_variable = "Aquest és el curs de PHP.";
$concatenated_message= $string . " " . $new_variable;
echo $concatenated_message . "<br>";

// EX 3
$X = 10;
$Y = 20;
$N = 3.1416;
$M =  25.5;

// valor de cada variable, suma, resta, producte, modul
echo "El valor de la primera variable és: " . $X . " i el valor de la segona variable és: " . $Y . "<br>";
echo "El valor de la suma de X + Y és: " . ($X + $Y) . "<br>";
echo "El valor de la resta de X - Y és: " . ($X - $Y) . "<br>";
echo "El producte de X i Y és: " . ($X * $Y) . "<br>";
echo "El mòdul de X i Y és: " . ($X / $Y) . "<br>";

echo "El valor de la primera variable és: " . $N . " i el valor de la segona variable és: " . $M . "<br>";
echo "El valor de la suma de X + Y és: " . ($N + $M) . "<br>";
echo "El valor de la resta de X - Y és: " . ($N - $M) . "<br>";
echo "El producte de X i Y és: " . ($N * $M) . "<br>";
echo "El mòdul de X i Y és: " . ($N / $M) . "<br>";

// Per a totes les variables
echo "El doble de X: " . (2 * $X) . "<br>";
echo "El doble de Y: " . (2 * $Y) . "<br>";
echo "El doble de N: " . (2 * $N) . "<br>";
echo "El doble de M: " . (2 * $M) . "<br>";

echo "La suma de totes les variables : " . ($X + $Y + $N + $M);
echo "El producte de totes les variables : " . ($X * $Y * $N * $M);

// b) Calculadora
function Calculadora($num1, $num2, $operacio) {
    switch($operacio) {
        case 'suma':
            return $num1 + $num2;
        case 'resta':
            return $num1 - $num2;
        case 'multiplicacio':
            return $num1 * $num2;
        case 'divisio':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "No es pot dividir entre zero";
            }
        default:
            return "Operació no vàlida";
    }
}

// Ex 4

function comptar($numMax = 10, $increase = 1) {
    for ($i = 0; $i <= $numMax; $i += $increase) {
        echo $i . "<br>";
    }
}

// Funció sense entrar dades
echo "Comptar fins a 10 d'1 en 1:<br>";
comptar();

// Funció entrant dades
echo "<br>Comptar fins a 20 de 2 en 2:<br>";
comptar(20, 2);

// Ex 5
function nota($notaAlumne) {
    if ($notaAlumne>= 60) {
        $missatge = "Primera divisió";
    } else if ($notaAlumne >=45 && $notaAlumne<60) {
        $missatge = "Segona divisió";
    } else if ($notaAlumne >=33 && $notaAlumne<45) {
        $missatge = "Tercera divisió";
    } else {
        $missatge = "Reprovat";
    }
    return $missatge;
}

// Exemple

$notaAlumne= 78;
echo nota($notaAlumne) ."<br>";
$notaAlumne= 55;
echo nota($notaAlumne) ."<br>";
$notaAlumne= 37;
echo nota($notaAlumne) ."<br>";
$notaAlumne= 21;
echo nota($notaAlumne) ."<br>";

// EX 6

function isBitten() {
    $bite = rand(1, 100);
    if ($bite <=50) {
        $message = "Charlie no t'ha mossegat";
    } else {
        $message = "Charlie t'ha mossegat";
    }
    return $message;
}

//Exemples
echo isBitten() . "<br>";
echo isBitten() . "<br>";
echo isBitten() . "<br>";
echo isBitten() . "<br>";
echo isBitten() . "<br>";
echo isBitten() . "<br>";
echo isBitten() . "<br>";
echo isBitten() . "<br>";
echo isBitten() . "<br>";

//Lvl 2 Ex 1

function costCalls($minutes) {
    $fixedCosts = 0.10;
    $costPerMinute = 0.05;

    if ($minutes < 3) {
        $totalCost = $fixedCosts;
    } else {
        $totalCost = $fixedCosts + (($minutes-3) * $costPerMinute);
    }
    return "El cost total és de: " . $totalCost . "€";
}

// Exemples
echo costCalls(14) . "<br>";
echo costCalls(12) . "<br>";
echo costCalls(2) . "<br>";

// Ex 2

function calcularTotal($quantitatXocolates, $quantitatXiclets, $quantitatCaramels) {
    $preuXocolata = 1.00;
    $preuXiclets = 0.50;
    $preuCaramels = 1.50;

    $totalXocolates = $quantitatXocolates * $preuXocolata;
    $totalXiclets = $quantitatXiclets * $preuXiclets;
    $totalCaramels = $quantitatCaramels * $preuCaramels;

    $total = $totalXocolates + $totalXiclets + $totalCaramels;

    return $total;
}

// Exemple
echo "El total de la compra és: " . calcularTotal(2, 1, 1) . "€. <br>";


// Lvl 3

function sieveOfEratosthenes($n) {
    if ($n < 2) {
        return [];
    }

    $isPrime = array_fill(0, $n + 1, true);
    $isPrime[0] = $isPrime[1] = false; // 0 i 1 no són primers

    for ($i = 2; $i * $i <= $n; $i++) {
        if ($isPrime[$i]) {
            for ($j = $i * $i; $j <= $n; $j += $i) {
                $isPrime[$j] = false;
            }
        }
    }
    $primes = [];
    for ($i = 2; $i <= $n; $i++) {
        if ($isPrime[$i]) {
            $primes[] = $i;
        }
    }

    return $primes;
}

// Exemple 
$nombre = 50; 
echo "Els nombres primers fins a " . $nombre . " són: ". implode(", ", sieveOfEratosthenes($nombre));
?>
