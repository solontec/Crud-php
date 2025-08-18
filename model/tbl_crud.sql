USE tbl_crud;

/* TRUNCATE TABLE usuarios; comando utilizado para limpar todo banco ser deletar estrutura*/
select * from usuarios;
CREATE TABLE IF NOT EXISTS usuarios ( 
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255),
senha VARCHAR(255)
);


CREATE TABLE IF NOT EXISTS produtos(

id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255),
descricao VARCHAR(255)

);