<?php
//pdo 참조 : https://wickedmagica.tistory.com/16
// PHP에서 MySQL DB에 접근할 때 사용하는 3가지 방법이 있다.


 // mysql_connect() //현재 사용하지않음
 // mysqli_connect()
 // PDO(PHP Data Object) //최근 사용


 // PDO란 여러 데이터베이스를 제어하는 방법을 표준화시킨 것이다. DB는 다양한 종류가 있다. 그리고 종류에 따라 다른 드라이브를 써 왔는데, 드라이브 종류에 따라 DB를 제어하기 위한 API가 달랐다. PDO를 쓰면 같은 방법으로 DB를 제어할 수 있다.
 // PDO를 쓰면 하나의 메서드 또는 어떤 방법을 통해 다양한 데이터베이스에 접근해 데이터를 다룰 수 있다는 뜻으로도 생각해볼 수 있다.

 $dbHost = "localhost";      // 호스트 주소(localhost, 120.0.0.1)
 $dbName = "test";      // 데이타 베이스(DataBase) 이름
 $dbUser = "root";          // DB 아이디
 $dbPass = "";        // DB 패스워드

 $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass);
 $stmt = $pdo -> prepare("SELECT * FROM user WHERE user_idx = :idx");

 $stmt -> bindValue(':idx, 5');
 
 $stmt -> execute();

 $result = array();
 while($row = $stmt -> fetch()){
  array_push($result, $row);
 }

 print_r($result);


 // 준비 구문을 사용하면 SQL 인젝션 공격을 막을 수 있고, 애플리케이션의 성능이 향상된다.
// PDO를 사용하는 이유는 준비 구문(Prepare Statements)을 활용할 수 있기 때문이다.






?>