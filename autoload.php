<?php
function __autoload($a) {
  $b = __DIR__ . '\\Classes\\' . $a . '.php';
  if (!file_exists($b)) {
    echo 'нет такого класса! ' . "<br>" . $a . "<br>" . 'По адресу: ' . "<br>" . $b;
    exit;
  }
  require_once $b;
}