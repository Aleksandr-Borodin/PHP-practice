<?php
// Дочерний класс - наследник Er (Extension);
class DataEr extends Er {
  public  function hand3(\Exception $e) {
    // Сначала будет использован метод hand3 класса Er;
    parent::hand3($e);
    // А уже потом измененный метод hand3 дочернего класса;
    echo "<br>" . 'Использован родительский метод + дочерний класса ' . get_class($this);
  }
  public function hand4() {
    return 2;
  }
}