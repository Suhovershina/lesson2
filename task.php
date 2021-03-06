<?php

function litres($t) {
    return floor ($t * 0.5);
  }

//Поскольку Натан знает, как важно избегать обезвоживания, он выпивает 0,5 литра воды за час езды на велосипеде.
//Вам дается время в часах, и вам нужно вернуть количество литров, которые выпьет Натан, округленное до наименьшего значения.
//time = 3 ----> litres = 1
//time = 6.7---> litres = 3
//time = 11.8--> litres = 5

echo "<hr>";

function repeatStr($n, $str)
{
  return str_repeat($str, $n);
}


//Напишите функцию с именем repeatStr, которая повторяет заданную строку string ровно n раз.
//repeatStr(6, "I") // "IIIIII"
//repeatStr(5, "Hello") // "HelloHelloHelloHelloHello"



function nthEven($n) {
    return $n*2-2;
     }
   
//Вернуть N-е четное число
//Пример (ввод --> вывод)

function solution($str) {
    return strrev($str);
  }
//Завершите решение так, чтобы оно перевернуло переданную в него строку.



function quotable($name, $quote) {
    return $name . ' '.'said:'. ' '.'"'. $quote . '"';
  }
//Эта функция должна принимать два строковых параметра: имя человека (name) и его цитату (quote), и возвращать строку, приписывающую цитату человеку, в следующем формате:
//'[name] said: "[quote]"'



function getCount($str) {
    $vowelsCount = 0;
    return preg_match_all("/[aeiou]/", $str);
  }
//Возвращает количество (количество) гласных в заданной строке.
//Мы будем рассматривать a, e, i, o, u как гласные для этой Ката (но не y).
//Входная строка будет состоять только из строчных букв и/или пробелов.



//Напишите функцию persistence, которая принимает положительный параметр num и возвращает его мультипликативную стойкость, то есть количество раз, которое вы должны умножить на num, пока не получите одну цифру.
//Например (Ввод --> Вывод):
?>