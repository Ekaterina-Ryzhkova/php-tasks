function isPerfectNumber($number) {
  $sumDivisors = array_sum(getDivisors($number));
  if ($sumDivisors === $number) {
    return true;
  };
  return false;
};

function getDivisors($number) {
  $divisors = [];

  for ($i = 1; $i < $number; $i++) {
    if(($number % $i) === 0) {
      $divisors[] = $i;
    }
  };

  return $divisors;
}

echo $result = isPerfectNumber(64) ? 'perfect' : 'isn\'t perfect';
