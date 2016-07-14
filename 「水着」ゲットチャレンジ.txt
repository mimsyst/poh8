<?php
	// 1行目 最初の文字数 後の文字数
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $s = explode(" ", $s);
    // 2行目 最初の文字列、 3行目 修正後の文字列
    $before = trim(fgets(STDIN));
    $after = trim(fgets(STDIN));
    $cnt = 0;		// 必要な看板数
    for ($i = 0; $i < $s[1]; $i++) {
        // afterの文字がbeforeにあるか？
        $pos = strpos($before, $after[$i]);
        if ($pos === false) {
            $cnt++;
        } else {
        	// 使った文字を削除
            $tmp = $before;
            if ($pos == 0) {
                $before = substr($tmp, 1, strlen($tmp) - 1);
            } else if ($pos == strlen($tmp) - 1) {
                $before = substr($tmp, 0, $pos);
            } else {
                //echo " ".$before."\n";
                $before = substr($tmp, 0, $pos);
                $before .= substr($tmp, $pos + 1, strlen($tmp) - 1);
            }
        }
    }
    echo $cnt."\n";
?>
