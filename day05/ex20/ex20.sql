select genre.id_genre 'id_genre', genre.name 'name_genre', distrib.id_distrib 'id_distrib', distrib.name 'name_distrib', film.title 'title_film'
from film 
left join distrib on distrib.id_distrib = film.id_distrib
left join genre on genre.id_genre = film.id_genre 
where (film.id_genre >= 4 and film.id_genre <= 8);
