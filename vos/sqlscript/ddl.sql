USE vos;
DROP TABLE IF EXISTS Notice;
CREATE TABLE Notice(
    Id int NOT NULL AUTO_INCREMENT ,
    Subject nvarchar( 256 ) NOT NULL ,
    Message nvarchar( 1024 ) ,
    Code nvarchar(127),
    Start date,
    `End` date,
    Source nvarchar(256),
    CONSTRAINT pk_Notice_Id PRIMARY KEY ( Id )
);