CREATE TABLE USUARIOS( 
    id int AUTO_INCREMENT PRIMARY KEY, 
    login VARCHAR(50) UNIQUE NOT NULL, 
    senha VARCHAR(255)
);

ALTER TABLE usuarios 
MODIFY COLUMN senha_hash VARCHAR(256) NOT NULL;
/*
Crieia tabela e depois modifiquei a coluna para ter tamanho 256 para utilizar o hash sha_256
*/