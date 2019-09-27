select floor_number 'floor', sum(nb_seats) 'seats'
from cinema 
group by floor_number 
order by sum(nb_seats) desc;
