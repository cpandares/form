CREATE DATABASE contact;
USE contact;

CREATE TABLE form(
    id     int(255) NOT NULL AUTO_INCREMENT,
    name   varchar(100) NOT NULL,
    email       varchar(100) NOT NULL,
    phone       varchar(100) NOT NULL,
    date        datetime,
    CONSTRAINT pk_form PRIMARY KEY(id),
    CONSTRAINT uq_form UNIQUE (email)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;