<?php
//변수는 변할 수 있는 데이터 저장하여 사용
//자바스크립트와 달리 상수보다는 변수를 거의 사용한다.
//변수명 안에 숫자 및 특수문자 사용 불가: 예외) $, _
//변수명은 대소문자 구분
//두 단어 연결 시 '_'(스네이크 케이스) 사용 권장
//변수명은 '$' 기호를 반드시 시작 문자열로 지정

$num = 3;
$str = 'string';

//결과값 확인 : echo, var_dump, print_r

echo '$num의 값은' .$num. '입니다'; //원시 문자열 조합은 '.'(마침표)를 사용한다.
echo '<br>';
echo $str;


?>