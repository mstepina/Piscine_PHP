select last_name, first_name 
from user_card where user_card.last_name like "%-%" or user_card.first_name like "%-%" 
order by last_name, first_name asc;
