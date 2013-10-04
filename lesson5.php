<?php

/**
 * PHP basic usage examples.
 * Lesson 5: Exception
 */

//throw new Exception('this is a exception');

/*
try {
    throw new Exception('this is a exception');
} catch (Exception $e) {
    echo $e->getMessage();
}
*/

/*
class MyException extends Exception
{

}
try {
    throw new Exception('this is a exception');
} catch (MyException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
*/

// 基本實作可能的情形
/*
class ShitException extends Exception
{

}
function test() {
    $test = 'a typhoon on weekend!?';

    if ($test !== 'no typhoon on weekend!?') {
        throw new ShitException();
    }

    echo 'happy weekend!!' . PHP_EOL;
};
test();
*/
