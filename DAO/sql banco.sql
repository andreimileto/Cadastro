create table pessoa(id serial,
nome varchar(200) not null,
cpf varchar(14) not null unique,
rg varchar(15),
endereco varchar(250) not null,
telefone varchar(11));
alter table pessoa add constraint pkid primary key (id);