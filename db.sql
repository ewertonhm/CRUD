create database empresa;

create table cliente (
                         id SERIAL PRIMARY KEY,
                         nome VARCHAR(100) NOT NULL,
                         data_nasc DATE NOT NULL,
                         cpf VARCHAR(14) NOT NULL,
                         telefone VARCHAR(24)
  );

create table produto(
                          id SERIAL PRIMARY KEY,
                          nome VARCHAR(100) NOT NULL,
                          quantidade VARCHAR(10),
                          valor DECIMAL,
                          unidademedida VARCHAR(5)
);
