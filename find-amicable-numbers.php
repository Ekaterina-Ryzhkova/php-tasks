function getProperDevisors($number) {
  $divisors = [];

  for ($i = 1; $i < $number; $i++) {
    if (($number % $i) === 0) {
      $divisors[] = $i;
    }
  };

  return $divisors;
}
function isAmicableNumbers($number1, $number2) {
  $sumDivisorsForNumber1 = array_sum(getProperDevisors($number1));
  $sumDivisorsForNumber2 = array_sum(getProperDevisors($number2));
  if ((($sumDivisorsForNumber1 === $number2) and ($sumDivisorsForNumber2 === $number1)) and ($number1 != $number2)) {
    return true;
  }

  return false;
};
function getAmicableNumbers($from, $to) {
  $amicableNumbers = [];

  for ($i = $from; $i <= $to; $i++) {
    for ($j = $from; $j <= $to; $j++) {
      if (isAmicableNumbers($i, $j)) {
        $amicableNumbers[] = array($i,$j);
      }
    }
  };
  
  // Well, my solution is not perfect. I know...

  return $amicableNumbers;
};

$result = getAmicableNumbers(1,300);
var_dump($result);
