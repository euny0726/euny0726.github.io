create table table1( /* table1이름을 가진 데이터베이스 테이블을 만들겠다는 의미 */
    
    num int not null auto_increment, /* 필드명 num. auto increment : 레코드 추가 시 자동으로 추가 */
    phone char(13) not null, /* 필드명 phone.(name값이랑 동일하게 쓰는 것 권장) char(13) 문자형 13글자 이내 허용 이름이나 번호에 씀, 빈값 허용 불가능 */
    fnotice text not null, /* taxt 글자 제한 없음. */
    
    primary key(num) /* 기본키(식별자) 필드를 num 필드로 지정 */
    
    );