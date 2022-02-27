drop database boxinator;
create database boxinator;
use boxinator; 

create table boxes (
id int not null auto_increment, 
receiverName varchar(255),
weight int, 
colour varchar(255),
country varchar(255),
primary key(id)
)engine=innodb;

insert into boxes (id, receiverName, weight, colour, country)
values ('001', 'Tester 1', '1', 'red', 'sweden');
insert into boxes (id, receiverName, weight, colour, country)
values ('002', 'Tester 2', '2', 'green', 'China');
insert into boxes (id, receiverName, weight, colour, country)
values ('003', 'Tester 3', '3', 'orange', 'Brazil');

select * from boxes; 