<?php

header('X-FRAME-OPTIONS:DENY');

// if(!empty($_POST)){
//   echo '<pre>';
//   var_dump($_POST);
//   echo '<?pre>';
// }

$pageFlg = 0;

if(!empty($_POST['btn_confirm'])){
  $pageFlg = 1;
}
if(!empty($_POST['btn_submit'])){
  $pageFlg = 2;
}

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

?>
<!DOCTYPE html>
<meta charset="utf-8">
<head></head>
<body>
  
<?php if($pageFlg === 1) : ?>
<form method="POST" action="input.php">
氏名
<?php echo h($_POST['your_name']); ?>
<br>
メールアドレス
<?php echo h($_POST['email']); ?>
<br>
<input type="submit" name="back" value="戻る">
<input type="submit" name="btn_submit" value="送信する">
<input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
<input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
</form>
<?php endif; ?>

<?php if($pageFlg === 2) : ?>
送信が完了しました
<?php endif; ?>

<?php if($pageFlg === 0) : ?>
<form method="POST" action="input.php">
氏名
<input type="text" name="your_name" value="<?php if(!empty($_POST['your_name'])){echo h($_POST['your_name']);} ?>">
<br>
メールアドレス
<input type="email" name="email" value="<?php if(!empty($_POST['email'])){echo h($_POST['email']);} ?>">
<br>
<input type="submit" name="btn_confirm" value="確認する">
</form>
<?php endif; ?>

</body>
</html>