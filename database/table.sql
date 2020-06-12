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

insert into postinfo (publisher,title,publishtime) values (2,"The second Post","2020-06-06 01:00:00");
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

insert into floorinfo (postid,publisher,content,replydate,parentfloor,replyto) values (2,1,"hello,world","2020-06-05 00:00:00",0,0);
insert into floorinfo (postid,publisher,content,replydate,parentfloor,replyto) values (2,2,"ok,hehe","2020-06-05 01:00:00",0,0);
insert into floorinfo (postid,publisher,content,replydate,parentfloor,replyto) values (2,3,"fine","2020-06-05 01:01:00",2,2);
insert into floorinfo (postid,publisher,content,replydate,parentfloor,replyto) values (2,2,"GG","2020-06-05 01:02:31",2,3);
insert into floorinfo (postid,publisher,content,replydate,parentfloor,replyto) values (2,3,"GG","2020-06-05 01:02:31",2,3);
*/

create table testinfo
(
id					 int not null auto_increment,
testname			 varchar(50) not null,
publisher			 int not null,
publishdate			 datetime not null,
warning				 int not null,
primary key (id)
);
/*
insert into testinfo (testname,publisher,publishdate,warning) values ("icpc",1,"2020-06-01 00:00:00",60);
*/
create table probinfo
(
	id					 int not null auto_increment,
	testid				 int not null,
	probid				 int not null,
	title				 varchar(50) not null,
	answer				 int not null,
	probtype			 int not null,
	primary key (id)
);
/*
insert into probinfo (testid,probid,title,answer) values (1,1,"1+1=",1);
insert into probinfo (testid,probid,title,answer) values (1,2,"2+2=",3);
insert into probinfo (testid,probid,title,answer) values (1,1,"xiaoming is student?",1);	
*/
create table proboption
(
	id					 int not null auto_increment,
	testid				 int not null,
	probid				 int not null,
	ind					 int not null,
	content				 varchar(50),
	primary key (id)
);
/*
insert into proboption (testid,probid,ind,content) values (1,1,1,"1");
insert into proboption (testid,probid,ind,content) values (1,1,2,"2");
insert into proboption (testid,probid,ind,content) values (1,1,3,"3");
insert into proboption (testid,probid,ind,content) values (1,1,4,"4");

insert into proboption (testid,probid,ind,content) values (1,2,1,"1");
insert into proboption (testid,probid,ind,content) values (1,2,2,"2");
insert into proboption (testid,probid,ind,content) values (1,2,3,"4");
insert into proboption (testid,probid,ind,content) values (1,2,4,"3");

insert into proboption (testid,probid,ind,content) values (1,3,1,"true");
insert into proboption (testid,probid,ind,content) values (1,3,2,"false");
*/
create table participation
(
	id					 int not null auto_increment,
	testid				 int not null,
	userid				 int not null,
	score				 int not null,
	primary key(id)
);
/*
insert into participation (testid,userid,score) values (1,2,50);
*/