CREATE TABLE my_table (
  id INT PRIMARY KEY IDENTITY(1,1),
  data1 VARCHAR(255) NOT NULL,
  data2 VARCHAR(255) NOT NULL,
  user_id INT NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Kreiranje tabele sa podacima i dodeljivanje user_id kako bi video 
-- ko je ubacio podatke