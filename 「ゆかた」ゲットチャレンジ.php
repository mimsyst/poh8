<?php
	// 1行目 冷蔵庫を開けた回数
    $cnt = trim(fgets(STDIN));
    for ( $i = 0; $i < $cnt; $i++) {
    	// 2行目以降 n時 入れた/出した
        $s = trim(fgets(STDIN));
        $s = str_replace(array("\r\n","\r","\n"), '', $s);
        $s = explode(" ", $s);
        $action[$i] = $s;
    }
    $temp = 0;	// 温度
    $Yen1_Cnt = 0;	// 1円の時間合計
    $Yen2_Cnt = 0;	// 2円の時間合計
    $act_cnt = 0;
    for ($i = 0; $i < 24; $i++) {
        if ($act_cnt < $cnt) {
            if ($i == $action[$act_cnt][0]) {
                if ($action[$act_cnt][1] == "in") {
                    $temp += 5;		// 入れたら5度上昇
                } else {
                    $temp += 3;		// 出したら3度上昇
                }
                $act_cnt++;
            }
        }
        if ($temp == 0) {
            $Yen1_Cnt++;
        } else {
            $Yen2_Cnt++;
        }

        if ($temp != 0) {
            $temp -= 1;
        }
    }
    $out = $Yen1_Cnt + ($Yen2_Cnt * 2);
    echo $out."\n";
?>
