CREATE DATABASE ESCOLA;

USE ESCOLA;


CREATE TABLE USUARIOS (
id_usuario int PRIMARY KEY AUTO_INCREMENT,
email_usuario varchar(255),
nome_usuario varchar(255),
senha_usuario varchar(255)
);

CREATE TABLE ALUNOS (
rm int PRIMARY KEY  AUTO_INCREMENT,
nome_aluno varchar(255),
email_aluno varchar(255),
endereco_aluno varchar(255),
data_nasc date,
telefone varchar(255),
cod_curso int
);

CREATE TABLE CURSOS (
cod_curso int PRIMARY KEY AUTO_INCREMENT,
nome_curso varchar(255),
periodo varchar(255)
);

ALTER TABLE ALUNOS ADD FOREIGN KEY(cod_curso) REFERENCES CURSOS (cod_curso);
