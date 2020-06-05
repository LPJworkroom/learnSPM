create table userinfo
(
	id					 int not null auto_increment,
	nick				 varchar(20) not null unique,
	password			 varchar(20) not null,
	position			 int not null,
	primary key (id)
);

/*
insert into userinfo (nick,password,position) values ("Mr.Wang","123456",0);
insert into userinfo (nick,password,position) values ("zhangsan","123456",0);
insert into userinfo (nick,password,position) values ("lisi","123456",0);

*/

create table postinfo
(
	id					 int not null auto_increment,
	publisher			 int not null,
	title				 varchar(100) not null,
	publishtime			 datetime,
	primary key (id)
);

/*
insert into postinfo (publisher,title,publishtime) values (1,"Hello,everyone","2020-06-05 00:00:00");

*/

create table floorinfo
(
	id					 int not null auto_increment,
	postid				 int not null,
	publisher			 int not null,
	content				 varchar(200) not null,
	replydate			 datetime,
	parentfloor			 int not null,
	replyto				 int not null,
	primary key (id)
	
);

/*
insert into floorinfo (postid,publisher,content,replydate,parentfloor,replyto) values (1,1,"hehe,ok,fine","2020-06-05 00:00:00",0,0);
insert into floorinfo (postid,publisher,content,replydate,parentfloor,replyto) values (1,2,"thank you","2020-06-05 01:00:00",0,0);
insert into floorinfo (postid,publisher,content,replydate,parentfloor,replyto) values (1,3,"creeper","2020-06-05 01:01:00",2,2);
insert into floorinfo (postid,publisher,content,replydate,parentfloor,replyto) values (1,2,"ggez","2020-06-05 01:02:31",2,3);

*/