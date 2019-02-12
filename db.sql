create database auladorodolfim;

create table aluno (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    data_nasc DATE NOT NULL,
    cpf VARCHAR(14) NOT NULL
);

create table historico(
    id SERIAL PRIMARY KEY,
    id_aluno INT REFERENCES aluno(ID),
    nota FLOAT NOT NULL,
    DATA_CAD DATE NOT NULL    
);