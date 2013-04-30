drop database if exists jlaqcomm_sn;

create database if not exists jlaqcomm_sn default character set utf8;

use jlaqcomm_sn;

create table if not exists empresa (
    id integer not null auto_increment primary key,
    nombre_empresa varchar(100) not null,
    descuento varchar(200)
) engine=InnoDB;

insert into empresa (nombre_empresa) values ("Inmobiliaria Ruba, S.A. de C.V.");
insert into empresa (nombre_empresa) values ("Ingenieria y Obras, S.A. de C.V");


create table if not exists tipocredito (
    id integer not null auto_increment primary key,
    tipo_credito varchar(50) not null
) engine=innodb; 

insert into tipocredito (tipo_credito) values ("Credito Fovissste");
insert into tipocredito (tipo_credito) values ("Cofinanciamiento Fovissste-Infonavit");
insert into tipocredito (tipo_credito) values ("Credito Banco");
insert into tipocredito (tipo_credito) values ("Cofinanciamiento Banco-Infonavit");
insert into tipocredito (tipo_credito) values ("Cofinanciamiento Banco-Fovissste");
insert into tipocredito (tipo_credito) values ("Compraventa simple");


create table if not exists usuario (
    id integer not null auto_increment primary key,
    nombre_usuario varchar(50) not null,
    password varchar(50) not null,
    email varchar(50) not null,
    empresa_id integer not null,

    constraint fk_usuario_empresa foreign key (empresa_id) references empresa(id)
    
) engine = InnoDB;

create table if not exists presupuesto (
    id integer not null auto_increment primary key,
    nombre_cliente varchar(100) not null,
    descripcion_inmueble varchar(100),
    tipo_credito_id integer not null,
    usuario_id integer not null,
    precio decimal(12,2) not null,
    avaluo decimal(12,2) not null,
    credito_fovissste decimal(12,2),
    credito_infonavit decimal(12,2),
    credito_banco decimal(12,2),
    vivienda_nueva boolean default true,
    cancelacion_credito integer default 0,
    traslacion_dominio decimal(12,2),
    derechos_registro decimal(12,2),
    certificado_gravamen decimal(12,2),
    certificaciones decimal(12,2),
    honorarios_fovissste decimal(12,2),
    honorarios_cliente decimal(12,2),

    constraint fk_presupuesto_tipo_credito foreign key (tipo_credito_id) references tipocredito(id),
    constraint fk_presupuesto_usuario foreign key (usuario_id) references usuario(id)

) engine = InnoDB;


