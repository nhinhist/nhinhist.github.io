<?php
$bai = isset($_GET['bai']) ? (string)$_GET['bai'] : null;

$map = [
  '1' => __DIR__ . '/pages/bt1.php',
  '2' => __DIR__ . '/pages/bt2.php',
  '3' => __DIR__ . '/pages/bt3.php',
];
?>
<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <title>Bài tập PHP</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <main class="container">
    <?php if ($bai === null): ?>
      <h1>Trang chủ</h1>
      <nav class="menu">
        <a class="btn" href="?bai=1">Bài tập 1</a>
        <a class="btn" href="?bai=2">Bài tập 2</a>
        <a class="btn" href="?bai=3">Bài tập 3</a>
      </nav>
    <?php elseif (isset($map[$bai])): ?>
      <a class="back" href="./">&larr; Quay lại trang chủ</a>
      <div class="page"><?php require $map[$bai]; ?></div>
      <a class="back" href="./">&larr; Quay lại trang chủ</a>
    <?php else: ?>
      <p>Không tìm thấy bài tập.</p>
      <a class="back" href="./">&larr; Về trang chủ</a>
    <?php endif; ?>
  </main>
</body>
</html>
