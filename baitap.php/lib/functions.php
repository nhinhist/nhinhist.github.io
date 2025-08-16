<?php
function tong($a,$b){ return $a+$b; }
function hieu($a,$b){ return $a-$b; }
function tich($a,$b){ return $a*$b; }
function thuong($a,$b){ return $b==0 ? 'Không thể chia cho 0' : $a/$b; }
function laNguyenTo($n){
  if($n<2) return false;
  if($n%2==0) return $n==2;
  for($i=3;$i*$i<=$n;$i+=2){ if($n%$i==0) return false; }
  return true;
}
function laChan($n){ return $n%2==0; }
