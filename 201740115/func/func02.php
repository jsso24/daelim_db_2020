<?php
#인사말1
//반복되는 인사말
/*
echo "안녕하세요.<br>"; //br태그로 다음줄 전송
print "대림대학교의 ";
print "대림이 입니다." . "<br>"; //문자열 결합 연산자(.)
*/
//함수를 실행하기 위해서는 호출이 필요 -> 선언, 실행 2단계 필요
hello(); 

#인사말2
/*
echo "안녕하세요.<br>"; //br태그로 다음줄 전송
print "대림대학교의 ";
print "대림이 입니다.<br>";
*/
hello();

#인사말3
//코드 묶기 -> 중괄호{} 이용
//코드블럭 여러 개 존재
//함수
//function 키워드 이용, 코드 묶는 것-> 함수의 선언
//선언된 함수는 선언일 뿐, 실행은 X
function hello()
{
    //코딩 컨벤셜, 들여쓰기(스페이즈 4칸), PSR규격 
    echo "안녕하세요.<br>"; //br태그로 다음줄 전송
    print "대림대학교의 ";
    print "대림이 입니다.<br>";
    return true;
} 