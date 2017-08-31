<?php

    # 威力彩對獎程式

    $_POST = json_decode(file_get_contents('php://input'), true);

    # 輸入彩券號碼陣列;可多組，第二區號碼寫最後一項
    $lottos =  $_POST['lottos'];
    
    # 開獎號碼
    $secAward = array_pop($_POST['award']);

    $section = [
        $_POST['award'],
        $secAward
    ];

    # 開始對獎    
    foreach($lottos as $lottoIndex => $lotto){
        unset($gotCode,$gotSec);
        
        $secCode = array_pop($lotto);

        foreach($lotto as $lottoCode){
            if(in_array($lottoCode,$section[0])){
                $gotCode[] = $lottoCode;
            }
        }
        
        $gotSec = ($section[1] == $secCode) ? '有' : '未';

        if(isset($gotCode)){
            sort($gotCode);
            $rs[] = '第'.($lottoIndex + 1).'組對中號數：'.implode(',',$gotCode). '； '.$gotSec.'中特別號';
        }else{
            $rs[] = '第'.($lottoIndex + 1).'組完全沒中!';
        }
    }

    echo json_encode($rs);
?>