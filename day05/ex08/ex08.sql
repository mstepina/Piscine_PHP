select last_name, first_name, DATE_FORMAT(birthdate, "%Y-%m-%d") as 'birthdate'
from user_card
where YEAR(birthdate) like '%1989%'
order by last_name asc;
