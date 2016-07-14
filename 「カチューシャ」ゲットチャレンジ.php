<?php
	// 1行目：ファンの人数 色紙の価格
	// 2行目：ペンの価格 書ける枚数
	
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $s = explode(" ", $s);
    $fun_max = $s[0];
    $sikisi_cost = $s[1];
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $s = explode(" ", $s);
    $pen_max = $s[0];
    $pen_cost = $s[1];
    
    $cost = $sikisi_cost * $fun_max;
    $cost += $pen_cost * ceil($fun_max / $pen_max);
    echo $cost."\n";
?>
