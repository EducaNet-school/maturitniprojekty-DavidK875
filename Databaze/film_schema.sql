create database movies;
use movies;

create table movie(
name varchar(50),
about text(500),
length time,
date date,
id int(10) primary key auto_increment);

create table category(
id int(10) primary key auto_increment,
cat_name varchar(20)
);

create table actor(
f_name varchar(30),
l_name varchar(30),
id int(10) primary key auto_increment
);

create table award(
name varchar(35),
about text(500),
date date,
place varchar(20),
id int(10) primary key auto_increment
);

create table m2c(
movie int(10),
category int(10),
id int(10) primary key auto_increment,
foreign key(category) references category(id),
foreign key(movie) references movie(id)
);

create table m2aw(
movie int(10),
award int(10),
id int(10) primary key auto_increment,
foreign key(award) references award(id),
foreign key(movie) references movie(id)
);

create table m2ac(
movie int(10),
actor int(10),
id int(10) primary key auto_increment,
foreign key(actor) references actor(id),
foreign key(movie) references movie(id)
);