create table board (
   num int not null auto_increment,
   id varchar(15) not null,
   name  varchar(10) not null,
   subject varchar(100) not null,
   content text not null,
   regist_day varchar(20),
   hit int,
   primary key(num)
)engine=innoDB charset=utf8;

