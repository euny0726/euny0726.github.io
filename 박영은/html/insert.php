<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>무제 문서</title>
</head>

<body> <!---->
    <?php 
        echo $_POST['fname']; /* form태그의 name 속성값 post라서 입력. name에 손님 입력한 값(이름) 가져오겠다는 의미  *//*php의 출력명령어는 echo*/
    ?>
    
    <br> <!--띄어쓰기 html 언어 사용 가능하나 php언어 밖에서 써야함.-->
   
    <?php
        echo $_POST['fphone']; /* form태그의 name 속성값 post라서 입력. name에 손님 입력한 값(전화번호) 가져오겠다는 의미  *//*php의 출력명령어는 echo*/

       if($_POST['fname'] == "박영은"){    // 손님이 입력한 이름과 박영은 문자값이랑 같은지 검사
           echo "운영자입니다.";}  // 조건이 충족되면 메시지 출력 

        echo $_POST["select_food2"];     // 예제 05-5-3의 입력한 값 출력


        echo $_POST["gender"];  // 예제 05-5-4의 입력한 값 출력    
    ?>
    
    <?php
        if($_POST["fname"] == "별"){     // 예제 05-5-1에 있는 이름 입력(fname)에 "별" 검색하면 별 이미지 나오게끔
    ?>
    <img src="images/별.png" alt="대체택스트">     <!--html언어이므로 php 밖으로. 검색 시 이미지 출력 -->
      <?php
    }    //php 언어이므로 php안에
    ?>
    
    
</body>
</html>
