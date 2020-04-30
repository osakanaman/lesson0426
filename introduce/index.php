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
        <div class="form-title">自己紹介</div>

          <form method="post" action="send.php">
            <div class="form-item">名前</div>
            <input type="text" name='name'>
    
            <div class="form-item">年齢</div>
            <select name='age'>
              <option value = "未選択">選択してください</option>
              <?php
              for ($i=10;$i<=100; $i++) {
                echo "<option value = '{$i}'>{$i}</option>";
              }  
              ?>
            </select>
    
            <div class="form-item">職業</div>
            <?php $types = array('会社員', '漁師', '主婦', '医者');?>
            <select name='work'>
              <option value = "未選択">選択してください</option>
              <?php 
              foreach ($types as $type) {
                echo "<option value = '{$type}'>{$type}</option>";
              }
              
              ?>
            </select>
    
            
            <div class="form-item">好きなこと</div>
            <textarea name='body'></textarea> 
    
            <input type="submit" value="送信">
          </form>
      </div>
    </div>

    
  
    <div class="footer"></div>

  </body>

</html>
