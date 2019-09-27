select  MD5(replace(contact(phone_number, '42'), '7', '9')) as ft
from distrib 
where id_distrib = 84;
