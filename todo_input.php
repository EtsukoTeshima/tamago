<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型todoリスト（入力画面）</title>
</head>

<body>
  <a href="todo_read.php">一覧画面</a>
  <form action="todo_create.php" method="POST">
        todo: <input type="text" name="todo">
        deadline: <input type="date" name="deadline">
        <button>submit</button>
  </form>

</body>

</html>