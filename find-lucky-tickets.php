function addZeros($number) {
    $result = '';
    $strLenght = strlen($number); 

    if ($strLenght < 6) {
        $countZeros = 6 - $strLenght;

        for ($i = 1; $i <= $countZeros; $i++) {
            $result .= 0;
        };
        
        $result .= $number;
    } 
    else {
        $result = $number;
    }

    return $result;
}

function getSumOfDigits($number) {
    $strLenght = strlen($number);
    $strNum = strval($number);
    $sum = 0;

    for ($i = 0; $i < $strLenght; $i++) {
        $sum += $strNum[$i];
    }

    return $sum;
}

function getLuckyTickets($from, $to) {
    $numbers = [];

    if ((strlen($from) <= 6 and strlen($from) >= 1) and (strlen($to) <= 6 and strlen($to) >= 1)) {
        for ($num = $from; $num <= $to; $num++) {
            $num = addZeros($num);

            $firstThree = substr($num, 0, 3);
            $secondThree = substr($num, 3, 3);

            if (getSumOfDigits($firstThree) == getSumOfDigits($secondThree)) {
                $numbers[] = $num;
            }
        }
        
    return $numbers;

    } 
    else {
        throw new Exception('Enter correct values.');
    }
}

function displayCombinations($arr) {
    foreach($arr as $elem) {
        echo $elem . '<br>';
    }
}

$result = getLuckyTickets(1, 999999);
displayCombinations($result);
