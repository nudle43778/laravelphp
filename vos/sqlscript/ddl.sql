create database vos;

go;

USE vos;
CREATE TABLE Notice(
    Id int NOT NULL AUTO_INCREMENT ,
    Subject nvarchar( 256 ) NOT NULL ,
    Message nvarchar( 1024 ) ,
    CONSTRAINT pk_Notice_Id PRIMARY KEY ( Id )
);