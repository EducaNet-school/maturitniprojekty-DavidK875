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

create View V_numOfAct 
AS SELECT movie.name, COUNT(m2ac.actor) 
AS num_actors FROM movie 
JOIN m2ac ON movie.id = m2ac.movie 
GROUP BY movie.id;

DELIMITER $$
CREATE FUNCTION longest_movie_in_category(category_name VARCHAR(20)) RETURNS INT DETERMINISTIC READS SQL DATA
BEGIN
    DECLARE max_duration INT;
    SELECT MAX(TIME_TO_SEC(TIME(m.length))) / 60 INTO max_duration
    FROM m2c mc
    JOIN movie m ON m.id = mc.movie
    JOIN category c ON c.id = mc.category
    WHERE c.cat_name = category_name;
    RETURN max_duration;
END
DELIMITER ;


DELIMITER $$
CREATE PROCEDURE delete_empty_categories()
BEGIN
    DELETE c
    FROM category c
    LEFT JOIN m2c mc ON c.id = mc.category
    WHERE mc.category IS NULL;
END
DELIMITER ;
