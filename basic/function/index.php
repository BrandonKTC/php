<?php
$num = 25123;
echo 'I have &pound;', number_format($num);

function name($name, $age)
{
    return 'my name is ' . $name . ' and I\'m ' . $age;
};

// echo name('brandon', '23');

function add()
{
    $total = 0;
    foreach (func_get_args() as $arg) {
        $total += $arg;
    };
    return $total;
};

// echo add(5, 10, 1);

function append($initial)
{
    $result = func_get_arg(0);
    foreach (func_get_args() as $key => $value) {
        if ($key >= 1) {
            $result .= ' ' . $value;
        }
    }
    return $result;
};

// echo append('Alex', 'James', 'Garrett');
