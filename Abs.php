<?php
// Простая автозагурзка классов;
$p = __DIR__ . '\autoload.php';
require_once $p;
// Проверка разницы поведения static и self;
// Классы Fr являются идентичными De и наследниками абстрактного к. Abs пространства имен Abs;
$a = new Fr();
$a->pa();
$a->lio();
$a->lio();
$b = new De();
$b->lio2();
$b->lio2();
$b->endsh();
// Реализация интерфейса;
$b->aust();
// Sp является наследником класса Abs в Classes;
$c = new Sp();
// Использовано другое пространство имен;
use Second\Abs as Sec;
$d = new Sec();
$f = new \Abs;