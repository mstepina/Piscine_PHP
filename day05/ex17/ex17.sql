select count(id_sub) as 'nb_susc', 
floor(avg(price)) as 'av_susc', 
(SUM(duration_sub) % 42) as 'ft' from subscription;
