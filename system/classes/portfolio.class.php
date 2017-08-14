<?php
/*
  PORTFOLIO.CLASS.php
  Version 1.0
*/
class Portfolio {

  private $db;

  function __construct($conn) {
    $this->_db = $conn;
  }

  public function loop() {
    $stmt = $this->_db->prepare("SELECT `id` FROM `portfolio` ORDER BY `id` DESC");
    $stmt->execute();
    $stmt->bind_result($row);
    while ($stmt->fetch()) {
      $return[] = $row;
    }
    return $return;
    $stmt->close();
  }

  //get data by id
  public function get($id, $col) {
    $stmt = $this->_db->prepare("SELECT `$col` FROM portfolio WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($row);
    while ($stmt->fetch()) {
      return $row;
    }
    $stmt->close();
  }

}
