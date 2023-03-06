insert into movie(name,about,length,date) VALUES("Shawshank redemption","","02:22:00","1995-7-6");
insert into movie(name,about,length,date) VALUES("Star Wars IV - New Hope","space stuff","02:01:00","1977-5-25");
insert into movie(name,about,length,date) VALUES("Star Wars V - Empire strikes back","I am your father","02:04:00","1980-5-21");
insert into movie(name,about,length,date) VALUES("Star Wars VI - Return of the Jedi","He ded","02:14:00","1983-5-25");
insert into movie(name,about,length,date) VALUES("Kung-Fu Panda","Rice dumplings","01:32:00","2008-6-3");
/* Movie data */
insert into category(cat_name) VALUES("Comedy");
insert into category(cat_name) VALUES("Adventure");
insert into category(cat_name) VALUES("Sci-fi");
insert into category(cat_name) VALUES("Fantasy");
insert into category(cat_name) VALUES("Drama");
/* category data */
insert into award(name,about,date,place) values("Oscar","academy sucks","1978-4-3","Los Angels");
insert into award(name,about,date,place) values("Oscar","academy sucks","1981-3-31","Los Angels");
insert into award(name,about,date,place) values("Oscar","academy sucks","1984-4-9","Los Angels");
/* award data */
insert into actor(f_name,l_name) VALUES("Morgan","Freeman");
insert into actor(f_name,l_name) VALUES("Mark","Hamill");
insert into actor(f_name,l_name) VALUES("Harrison","Ford");
insert into actor(f_name,l_name) VALUES("Jackee","Chan");
insert into actor(f_name,l_name) VALUES("Carrie","Fisher");
insert into actor(f_name,l_name) VALUES("Alec","Guiness");
insert into actor(f_name,l_name) VALUES("David","Prowse");
insert into actor(f_name,l_name) VALUES("Tim","Robbins");
/*actor data*/
insert into m2c(movie,category) VALUES(1,5);
insert into m2c(movie,category) VALUES(2,3);
insert into m2c(movie,category) VALUES(3,3);
insert into m2c(movie,category) VALUES(4,3);
insert into m2c(movie,category) VALUES(5,1);
insert into m2c(movie,category) VALUES(5,2);
/*Category with movie */
insert into m2aw(movie,award) VALUES(2,1);
insert into m2aw(movie,award) VALUES(3,2);
insert into m2aw(movie,award) VALUES(4,3);
/*movie with award*/
insert into m2ac(movie,actor) values(1,1);
insert into m2ac(movie,actor) values(1,8);
insert into m2ac(movie,actor) values(2,2);
insert into m2ac(movie,actor) values(3,2);
insert into m2ac(movie,actor) values(4,2);
insert into m2ac(movie,actor) values(2,3);
insert into m2ac(movie,actor) values(3,3);
insert into m2ac(movie,actor) values(3,3);
insert into m2ac(movie,actor) values(2,7);
insert into m2ac(movie,actor) values(3,7);
insert into m2ac(movie,actor) values(4,7);
insert into m2ac(movie,actor) values(2,5);
insert into m2ac(movie,actor) values(3,5);
insert into m2ac(movie,actor) values(4,5);
insert into m2ac(movie,actor) values(5,4);
insert into m2ac(movie,actor) values(2,6);
insert into m2ac(movie,actor) values(1,8);
