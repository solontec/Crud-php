USE tbl_crud;
select * from usuarios;
CREATE TABLE IF NOT EXISTS usuarios ( 
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255),
senha VARCHAR(50)
);