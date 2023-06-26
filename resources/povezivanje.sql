SELECT my_table.data1, my_table.data2, users.username
FROM my_table
INNER JOIN users ON my_table.user_id = users.id;

-- povezivanje tabela sa podacima i korisnikom koji je uneo podatke
