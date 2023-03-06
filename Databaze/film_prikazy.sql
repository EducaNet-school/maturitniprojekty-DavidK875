SELECT movie.name, COUNT(m2ac.actor) AS num_actors FROM movie JOIN m2ac ON movie.id = m2ac.movie GROUP BY movie.id;
/*Ukol 1*/


SELECT actor.f_name, actor.l_name, COALESCE(movie.name, 'Not in any movie') AS movie_name
FROM actor 
LEFT JOIN m2ac ON actor.id = m2ac.actor 
LEFT JOIN movie ON m2ac.movie = movie.id;
/*Ukol 2*/

SELECT NAME FROM movie ORDER BY length DESC LIMIT 1; 
/*Ukol 3*/


SELECT movie.name, COUNT(m2aw.award) AS num_awards
FROM movie
LEFT JOIN m2aw ON movie.id = m2aw.movie
LEFT JOIN award ON m2aw.award = award.id
GROUP BY movie.id
ORDER BY num_awards DESC;
/* ukol 4*/


