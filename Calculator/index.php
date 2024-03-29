<?php

function SqValidator($val)
{
    $open = 0; // создаем счетчик открывающихся скобок
    for ($i = 0; $i < strlen($val); $i++) // перебираем все символы строки
    {
        if ($val[$i] == '(') // если встретилась «(»
            $open++; // увеличиваем счетчик
        else
            if ($val[$i] == ')') // если встретилась «)»
            {
                $open--; // уменьшаем счетчик
                if ($open < 0) // если найдена «)» без соответствующей «(»
                    return false; // возвращаем ошибку
            }
    }
    // если количество открывающихся и закрывающихся скобок разное
    if ($open !== 0)
        return false; // возвращаем ошибку
    return true; // количество скобок совпадает – все ОК
}

function isnum($x)
{
    $x = (string) $x;
    if (!$x)
        return false; // если строка пустая – это НЕ число!
    if ($x[0] == '.' || $x[0] == '0') // число не может начинаться с точки или
        return false;
    if ($x[strlen($x) - 1] == '.') // число не может заканчиваться на точку
        return false;
    // перебираем все символы строки в цикле
    for ($i = 0, $point_count = false; $i < strlen($x); $i++) {
        // если в проверяемой строке недопустимый в числе символ
        if (
            $x[$i] != '0' && $x[$i] != '1' && $x[$i] != '2' && $x[$i] != '3' &&
            $x[$i] != '4' && $x[$i] != '5' && $x[$i] != '6' && $x[$i] != '7' &&
            $x[$i] != '8' && $x[$i] != '9' && $x[$i] != '.'
        ) {
            return false; // недопустимые символы в строке
        }
        if ($x[$i] == '.') // если в строке встретилась точка
        {
            if ($point_count) // если точка уже встречалась
                return false; // то это не число
            else // если это первая точка в строке
                $point_count = true; // запоминаем это
        }
    }

    return true; // все проверки пройдены – это число
}

function calculate($val)
{
    if (!$val)
        return 'Выражение не задано!'; // если строка пуста – ошибка
    if (isnum($val))
        return $val; // если выражение число – возвращаем его

    // разбиваем строку на аргументы и заносим их в массив
    $args = explode('+', $val);
    if (count($args) > 1) // если в выражении есть символы «+»
    {
        $sum = 0; // начальное значение суммы аргументов
        for ($i = 0; $i < count($args); $i++) // перебираем все слагаемые
        {
            $arg = calculate($args[$i]); // вычисляем значение слагаемого
            if (!isnum($arg)) // если результат не число
                return $arg; // возвращаем ошибку
            $sum += $arg; // суммируем слагаемое с предыдущими
        }
        return $sum; // если все слагаемые числа – возвращаем сумму
    }


    $args = explode('-', $val);
    if (count($args) > 1) // если в выражении есть символы «-»
    {
        $sus = $args[0]; // начальное значение суммы аргументов
        for ($i = 1; $i < count($args); $i++) // перебираем все слагаемые
        {
            $arg = calculate($args[$i]); // вычисляем значение слагаемого
            if (!isnum($arg)) // если результат не число
                return $arg; // возвращаем ошибку
            $sus -= $arg; // вычитаем слагаемое с предыдущими
        }
        return $sus; // если все слагаемые числа – возвращаем сумму
    }


    // разбиваем строку на множители и заносим их в массив
    $args = explode('*', $val);
    if (count($args) > 1) // если в выражении есть символы «*»
    {
        $sup = 1; // начальное значение произведения аргументов
        for ($i = 0; $i < count($args); $i++) // перебираем все множители
        {
            $arg = $args[$i]; // текущий множитель

            // проверяем – если множитель не число –возвращаем ошибку
            if (!isnum($arg))
                return 'Неправильная форма числа!';
            $sup *= $arg; // умножаем множитель с предыдущими
        }
        return $sup; // если все множители числа – возвращаем произведение
    }
    // выражение – не число, но и символов «+» или в нем нет


    $args = explode('/', $val);
    if (count($args) > 1) // если в выражении есть символы «÷»
    {
        $sud = $args[0]; // начальное значение произведения аргументов
        for ($i = 1; $i < count($args); $i++) // перебираем все множители
        {
            $arg = $args[$i]; // текущий множитель

            // проверяем – если множитель не число –возвращаем ошибку
            if (!isnum($arg))
                return 'Неправильная форма числа!';
            $sud /= $arg; // умножаем множитель с предыдущими
        }
        return $sud; // если все множители числа – возвращаем произведение
    }
    // выражение – не число, но и символов «+» или в нем нет
    return 'Недопустимые символы в выражении';


}


function calculateSq($val)
{
    // проверка на корректность использования скобок в выражении
    if (!SqValidator($val)) {
        var_dump($val);
        return 'Неправильная расстановка скобок';
    }
    $start = strpos($val, '('); // ищем первую открывающуюся скобку
    if ($start === false) // если в выражении нет скобок
        return calculate($val); // используем функцию calculate()
    // ищем соответствующую открывающейся закрывающуюся скобку
    $end = $start; // первое место поиска – следующий символ
    $open = 1; // количество найденных открывающихся скобок пока 1 шт.
    // цикл пока скобка не найдена или не дошли до конца строки
    // признаком найденной скобки является обнуление счетчика скобок
    while ($open && $end < strlen($val)) {
        if ($val[$end] == '(') // символ «(» увеличивает счетчик
            $open++;
        if ($val[$end] == ')') // символ «)» уменьшает счетчик
            $open--;
        $end++;
    }

    // формируем новое выражение, путем замены содержимого скобок на вычисленное

    $new_val = substr($val, 0, $open); // часть исходного выражение левее скобок
    $new_val .= calculateSq(substr($val, $open + 1, $end - $open - 2)); // часть в скобках
    $new_val .= substr($val, $end); // часть исходного выражение правее скобок
    return calculateSq($new_val); // вычисляем новое выражение и возвращаем его
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $res = calculateSq(str_replace(' ', '', $_POST["val"]));
    if (isnum($res)) {
        echo $res;
    } else {
        echo "Ошибка вычисления выражения: " . $res;
    }
}


?>