select upper(user_card.last_name) 'NAME',
user_card.first_name, subscription.price from user_card, member, subscription 
where user_card.id_user = member.id_user_card and  member.id_sub = subscription.id_sub 
and subscription.price > 42 
order by  user_card.last_name asc, user_card.first_name asc;
