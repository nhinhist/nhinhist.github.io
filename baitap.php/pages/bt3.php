<?php
require_once __DIR__ . '/../lib/functions.php';

echo "<h2>Bài tập 3: Phép tính & kiểm tra số</h2>";
?>
<form method="post" class="controls">
  <label><input type="radio" name="op" value="cong" checked> Cộng</label>
  <label><input type="radio" name="op" value="tru"> Trừ</label>
  <label><input type="radio" name="op" value="nhan"> Nhân</label>
  <label><input type="radio" name="op" value="chia"> Chia</label>
</form>
<form method="post" class="controls">
  <input type="hidden" name="op" value="<?php echo isset($_POST['op'])?htmlspecialchars($_POST['op']):'cong'; ?>">
  <input type="number" step="any" name="a" placeholder="Số thứ nhất" required>
  <input type="number" step="any" name="b" placeholder="Số thứ hai" required>
  <button>Tính</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['a'],$_POST['b'],$_POST['op'])) {
  $a=(float)$_POST['a']; $b=(float)$_POST['b']; $op=$_POST['op'];
  if($op==='cong') $kq=tong($a,$b);
  elseif($op==='tru') $kq=hieu($a,$b);
  elseif($op==='nhan') $kq=tich($a,$b);
  else $kq=thuong($a,$b);
  echo '<p>Kết quả: <strong>'.htmlspecialchars((string)$kq).'</strong></p>';
}
?>
<hr>
<form method="post" class="controls">
  <input type="hidden" name="check" value="1">
  <input type="number" name="n" placeholder="Nhập số nguyên" required>
  <select name="type">
    <option value="nt">Nguyên tố?</option>
    <option value="chan">Chẵn?</option>
  </select>
  <button>Kiểm tra</button>
</form>
<?php
if (isset($_POST['check'],$_POST['n'],$_POST['type'])) {
  $n=(int)$_POST['n'];
  if($_POST['type']==='nt'){
    echo '<p>Số <strong>'.$n.'</strong> '.(laNguyenTo($n)?'là nguyên tố':'không phải nguyên tố').'.</p>';
  } else {
    echo '<p>Số <strong>'.$n.'</strong> '.(laChan($n)?'là số chẵn':'là số lẻ').'.</p>';
  }
}
