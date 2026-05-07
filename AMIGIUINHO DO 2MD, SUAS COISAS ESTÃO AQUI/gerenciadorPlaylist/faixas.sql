create database diana;
drop database faixas;
use diana;

create table faixas (
	id INT auto_increment primary key,
	titulo varchar(220) not null,
	artista varchar(220) not null,
	genero varchar(100) not null,
	album varchar(220),
	ano int
)

select * from faixas;

drop table faixas;

insert into faixas (titulo, artista, genero) values (
	"Superstition", "Stevie Wonder", "Funk, Soul"	
)