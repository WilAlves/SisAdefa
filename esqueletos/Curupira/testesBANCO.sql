create table TpDeficiencia(
CodigoTpDefic integer,
DescricaoTpDefic varchar(200),
primary key(CodigoTpDefic));

select * from TpDeficiencia

create table DescDeficiencia(
CodigoDescDefic integer,
DescricaoDefic varchar(200),
primary key(CodigoDescDefic));

select * from DescDeficiencia

create table Cursos(
CodigoCurso integer,
NomeCurso varchar(200),
VagasCurso integer,
primary key(CodigoCurso));

select * from Cursos