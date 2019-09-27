select title 'Title', summary 'Summary', prod_year from film, genre 
where film.id_genre = genre.id_genre and genre.name = 'erotic'
order by prod_year desc;
