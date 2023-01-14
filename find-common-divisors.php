function getDivisors($number) {
    $divisors = [];

    for ($i = 1; $i <= $number; $i++) {
        if (($number % $i) === 0) {
            $divisors[] = $i;
        }
    };

    return $divisors;
}

function findCommonDivisors($number1, $number2) {
    return array_intersect(getDivisors($number1), getDivisors($number2));
};

$result = findCommonDivisors(6, 24);
var_dump($result);
