create database Book
use Book

create table users(
id int primary key auto_increment,
name varchar(50),
password varchar(50),
email varchar(255),
fullName varchar(255),
type tinyint)

create table categories(
categoryID int primary key auto_increment,
categoryName varchar(50)
)
create table books(
bookID int primary key auto_increment,
categoryID int,
bookName varchar(50),
description varchar(255)

 )
 
create table authors(
authorID int primary key auto_increment,
bookID int,
authorFullName varchar(255)
)


insert into users (id, name, password, email,fullName,type) values (1, 'admin','123456', 'hanglee305@gmail.com', 'Administrator', 1)
insert into users values (2, "hang","123456", "hanglee305@gmail.com", "Thanh Hang", 2)

//category
insert into categories values (1, 'Children Book'),
insert into categories (categoryID, categoryName) values (2, 'Life skill')

//books
insert into books values (1, 1,'One Thousand and One Nights','The greatest work of Arabic literature from antiquity to the past, is one of the great and grandiose creations of world literature.')