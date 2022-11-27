<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>무제 문서</title>
</head>

<body><!-- 작동 확인 시 http://eunyverse.dothome.co.kr/04-28-1.html 확인. f12로 안먹힘.-->
    <?php
    /* $는 변수값입력. dbConnect는 임의로 설정한 이름. new mysqili : 마이쿼리불러오는 명령어. 최신버전에선 new를 붙여 쓴다. */
    /* 서버명, 데이터베이스아이디, 데이터베이스 비밀번호, 데이터베이스 이름 */
    $dbConnect = new mysqli("localhost", "eunyverse", "duddms13!", "eunyverse");
    $dbConnect -> set_charset("utf8"); 
    
    /*예제에서 form method="post"로 잡아서 $_POST로 작성한 것. */
    $phone = $_POST["phone"]; /* 연결한 예제(04-28-1)의 폼태그 name속성과 같아야함 (id는 라벨태그!) */ /* $phone =, $fnotice= 로 적재하겠다는 뜻. 19행 values에 큰따음표 없이   */
    $fnotice =  $_POST["fnotice"]; /* 연결한 예제(04-28-1)의 폼태그 name속성과 같아야함 (id는 라벨태그!) */
    
    $sql = "insert into table1(phone, fnotice) values('$phone', '$fnotice')";  /* sql 임의로 설정. */
    /* table1 테이블의 phone필드와 fnotice필드에 데이터 삽입. values 괄호안에 삽입할 값 입력  */
    
    $dbConnect -> query($sql); /* 데이터베이스 실행 */
        
    echo "문의 성공";
    
    ?>
</body>
</html>
