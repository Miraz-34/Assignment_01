<?php


function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


function findPrimesInArray($arr) {
    $primes = [];
    foreach ($arr as $num) {
        if (isPrime($num)) {
            $primes[] = $num;
        }
    }
    return $primes;
}


$inputArray = [2, 3, 4, 5, 10, 11, 13, 15, 17, 19, 20, 23];
$primeNumbers = findPrimesInArray($inputArray);

echo "Prime numbers in the array: ";
echo implode(", ", $primeNumbers);
?>