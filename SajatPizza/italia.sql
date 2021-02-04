create table users (
    id int(5) AUTO_INCREMENT PRIMARY KEY,
    felhasznalonev varchar(16),
    email varchar(32),
    tel varchar(15),
    jelszo varchar(100),
    ADMIN tinyint(4)
);
create table etlap (
    id int(5) AUTO_INCREMENT PRIMARY KEY,
    nev varchar(40),
    ar int(5),
    hozzavalok varchar(100),
    kep varchar(100)
);
create table rendelesek (
    id int(10) AUTO_INCREMENT PRIMARY KEY,
    userID int(5),
    tartalom varchar(100),
    aktiv tinyint(1),
    varos varchar(30),
    utcha varchar(40),
    hazszam varchar(20),
    ido varchar(100),
    osszeg int(10),
    FOREIGN KEY (userID) REFERENCES users(id)
);