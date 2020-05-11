<?php

/*fisermanテーブル表示、JOIN*/
try {

  $dbh = new PDO("mysql:host=127.0.0.1; dbname=lesson01; charset=utf8", 'hoge', 'hogehoge');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // $sql = "SELECT * FROM fiserman";
  // $sql = "SELECT * FROM fish";
  $sql = "SELECT * FROM fish RIGHT OUTER JOIN fiserman ON fish.id =  fiserman.fish_id";
  $stmt = $dbh->query($sql);
  foreach ($stmt as $row) {
    echo $row['id'] . ':' . $row['name']. ':' . $row['fish_caught']. ':' . $row['type']. ':'.$row['date'] ."\n";
  }

} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}


/*insert*/

// try {

//   $dbh = new PDO("mysql:host=127.0.0.1; dbname=lesson01; charset=utf8", 'hoge', 'hogehoge');
//   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "INSERT INTO fish (name, type) VALUES (:name, :type) ";
//   $stmt = $dbh->prepare($sql); 
//   $fiserman = array('カサゴ'=>'根魚', 'タチウオ'=>'青物');
//   foreach ($fiserman as $key => $val) {
//   $stmt->execute(array(':name' => $key, ':type' => $val));
//   }
// } catch (PDOException $e) {
//   echo $e->getMessage();
//   exit;
// }


?>


