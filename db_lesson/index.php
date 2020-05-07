<?php

/*fisermanテーブル表示*/
try {

  $dbh = new PDO("mysql:host=127.0.0.1; dbname=lesson01; charset=utf8", 'hoge', 'hogehoge');
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM fiserman";
  $stmt = $dbh->query($sql);
  foreach ($stmt as $row) {
    echo $row['id'] . ':' . $row['name']. ':' . $row['fish_caught']. ':' .$row['date'] ."\n";
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
 
//   // 挿入する値は空のまま、SQL実行の準備をする
//   $stmt = $dbh->prepare($sql);
 
//   // 挿入する値を連想配列に格納する
//   $fiserman = array('カサゴ'=>'根魚', 'タチウオ'=>'青物');
 
//   // foreachで挿入する値を1つずつループ処理
//   foreach ($fiserman as $key => $val) {
 
//   // 連想配列のキーを :name に、値を :population にセットし、executeでSQLを実行
//   $stmt->execute(array(':name' => $key, ':type' => $val));
//   }
// } catch (PDOException $e) {
//   echo $e->getMessage();
//   exit;
// }

?>


