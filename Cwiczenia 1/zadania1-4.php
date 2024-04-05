<?php
// zadanie 1

echo "Zadanie 1\n";

$fruits = array ("jablko", "banan", "pomarancza");

foreach ($fruits as $key => $value) {
    for ($i=strlen($value)-1; $i>=0; $i--) {
        echo $value[$i];
    }
    echo "\n";
    if ($value[0] == "p") echo "owoc: $value zaczyna sie na litere p";
}

// zadanie 2

echo "\n\nZadanie 2\n";
function isPrime($n, $i = 2)
{
    if ($n <= 2)
        return ($n == 2) ? true : false;
    if ($n % $i == 0)
        return false;
    if ($i * $i > $n)
        return true;

    return isPrime($n, $i + 1);
}

function genPrimeRange($start, $stop) {
    for ($i=$start;$i<=$stop;$i++) {
        if(isPrime($i)) echo "$i, ";
    }
}
genPrimeRange(10,100);

// zadanie 3

echo "\n\nZadanie 3\n";

$N = 10;

function fibonaciNumbers($n)
{
    if ($n <= 1) return 1;
    return fibonaciNumbers($n-1) + fibonaciNumbers($n-2);
}

for ($j = 0; $j < $N; $j++) {
    $fibNumbers[] = fibonaciNumbers($j);
}

foreach ($fibNumbers as $index => $number) {
    if ($number % 2) echo "$index. $number, \n";
}

// zadanie 4

$lorem =  "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$explodedLorem = explode(" ", $lorem);

for ($i = 0; $i < count($explodedLorem); $i++) {
    if (strpos($explodedLorem[$i], ".")) unset($explodedLorem[$i]);
    elseif (strpos($explodedLorem[$i], ",")) unset($explodedLorem[$i]);
    elseif (strpos($explodedLorem[$i], ";")) unset($explodedLorem[$i]);
}
$explodedLorem2 = array_values($explodedLorem);

for ($j = 0; $j < count($explodedLorem2)-2; $j++) {
    if (!($j % 2)) $associatedArray[$explodedLorem2[$j]] = $explodedLorem2[$j+1];
}

foreach ($associatedArray as $key => $value) {
    echo "$key => $value\n";
}
