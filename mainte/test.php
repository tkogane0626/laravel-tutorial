<?php

// パスワードを記録したファイルの場所
echo __FILE__;
// /home/ec2-user/environment/php_test/mainte/test.php

// パスワード(暗号化)
echo '<br>';
echo(password_hash('password123', PASSWORD_BCRYPT));

?>