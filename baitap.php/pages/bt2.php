<?php
echo "<h2>Bài tập 2: Bảng sách</h2>";

$books = [];
for ($i=1;$i<=100;$i++){
  $books[] = ['stt'=>$i,'ten'=>"Tensach$i",'nd'=>"Noidung$i"];
}

$perPage = 10;
$total = count($books);
$pages = (int)ceil($total/$perPage);

$p = 1;
if (isset($_GET['p'])) {
  $p = (int)$_GET['p'];
  if ($p < 1) $p = 1;
  if ($p > $pages) $p = $pages;
}
$offset = ($p-1)*$perPage;
$view = array_slice($books,$offset,$perPage);

echo '<table><tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>';
foreach($view as $r){
  echo '<tr><td>'.$r['stt'].'</td><td>'.htmlspecialchars($r['ten']).'</td><td>'.htmlspecialchars($r['nd']).'</td></tr>';
}
echo '</table>';

echo '<div class="pagination">';
if ($p>1){ echo '<a href="?bai=2&p=1">« Đầu</a> <a href="?bai=2&p='.($p-1).'">‹ Trước</a>'; }
$start=max(1,$p-2); $end=min($pages,$p+2);
for($i=$start;$i<=$end;$i++){
  if($i==$p) echo '<span class="active">'.$i.'</span>';
  else echo '<a href="?bai=2&p='.$i.'">'.$i.'</a>';
}
if ($p<$pages){ echo '<a href="?bai=2&p='.($p+1).'">Sau ›</a> <a href="?bai=2&p='.$pages.'">Cuối »</a>'; }
echo '</div>';
