<?php
    // 1
    //a) 
    function factorial($value){
        $total = $value;
        while($value != 1){
            $value = $value - 1;
            $total = $total * $value;
        }
        return $total;
    }
    //b)
    function is_prime($value){
        $i = 2;
        do{
            if($value % $i == 0){
                return false;
            }

            $i = $i + 1;
        } while ($i < $value);
        return true;
    }
    function divisors($value){
        $divisors = array(1);
        $i = 2;
        do{
            if($value % $i == 0){
                array_push($divisors,$i);
            }

            $i = $i + 1;
        } while ($i < $value);
        return $divisors;
    }
    //c)
    function is_perfect($value){
        return $value == array_sum(divisors($value));
    }

    function print_array($array){
        $array_length = count($array);
        for ($i=0; $i < $array_length; $i++) { 
            echo '<br>';
            echo $array[$i];
        }
    }
    //2
    //a
    $fatoriais = [];
    for ($i=1; $i < 10; $i++) { 
        array_push($fatoriais,factorial($i));
    }
    echo '<h1>Fatoriais</h1>';
    print_array($fatoriais);

    //b
    $primes = [];
    echo '<h1>Primos</h1>';
    $i = 2;
    while(count($primes)<10){
        if(is_prime($i)){
            array_push($primes,$i);
        }
        $i = $i + 1;
    }
    print_array($primes);

    $perfects = [];
    echo '<h1>Perfeitos</h1>';
    $i = 3;
    while(count($perfects)<3){
        if(is_perfect($i)){
            array_push($perfects,$i);
        }
        $i = $i + 1;
    }
    print_array($perfects)

?>