create table table1( /* table1 이름을 가진 데이터베이스 테이블을 만들겠다 */
	
	num int not null auto_increment, /* 레코드가 추가될 때 자동 생성 */
	phone char(13) not null,	/* phone 필드 생성, 문자형 13글자 이내 허용, 빈값 허용 불가능 */
	fnotice text not null,
	
	primary key(num) /* 기본키(식별자) 필드를 num필드로 지정 */
	
	);