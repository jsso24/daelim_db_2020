<?php
# $msg = "abcde";
# echo $msg;
// for문 횟수 지정 -> 알고 있어야 한다.
// 모르면???

$fruit = ['apple'=>"사과",'con'=>"옥수수",'straw'=>"딸기"];
// 갯수는 어떻게 알 수 있을까? 반복할 수 있을까?
foreach ($fruit as $key => $value) {
    echo $key . "=>";
    echo $value;
    print "<br>";
}

// 연상배열 => for??? 순번지정...