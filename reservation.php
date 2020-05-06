<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>キャンプサイト入力内容確認</title>
</head>

<body>
  <table>
    <tr>
      <td>お名前</td><td><?php echo $_POST["name"] ?></td>
    </tr>
    <tr>
      <td>メールアドレス</td><td><?php echo $_POST["adress"] ?></td>
    </tr>
    <tr>
      <td>性別</td><td><?php echo $_POST["sex"] ?></td>
    </tr>
    <tr>
      <td>血液型</td><td><?php echo $_POST["blood"] ?></td>
    </tr>
    <tr>
      <td>ご要望</td><td><?php echo $_POST["youbou"] ?></td>
    </tr>
  </table>
</body>
</html>
