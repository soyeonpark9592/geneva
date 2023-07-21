create table member(
id char(15)  not null,
pass char(15) not null,
name char(10) not null,
email char(80),
hp char(20) not null,
primary key(id)
)engine=innoDB charset=utf8;