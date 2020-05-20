<!DOCTYPE html>  
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>自己紹介</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
    <div class="header">
      <div class="header-logo"></div>
    </div>
  
  
    <div class="main">
      <div class="form">
        <div class="form-title">入力内容</div>

        <!-- $_POSTは連想配列 -->
            <div class="form-item">■名前</div> 
            <?php echo $_POST['name'];?>
    
            <div class="form-item">■年齢</div>
            <?php echo $_POST['age']; ?>
    
            <div class="form-item">■職業</div>
            <?php echo $_POST['work']; ?>
    
            <div class="form-item">■好きなこと</div>
            <?php echo $_POST['body']; ?>
            
      <form method="post" action="index.php">
      <input type="submit" value="戻る">
      </form>
      </div>

    </div>

    
  
    <div class="footer"></div>

  </body>

</html>