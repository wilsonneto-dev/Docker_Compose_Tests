create database if not exists lista;
use lista;

create table if not exists products (
    id int(11) auto_increment,
    info VARCHAR(255),
    price decimal(10,2),
    PRIMARY KEY (id)
);

insert into products value(0, 'Curso Front End Especialista', 200);
insert into products value(0, 'Curso Front End 2', 300);
