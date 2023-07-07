create database musicapplication;

use musicapplication;

create table users(
    id int not null AUTO_INCREMENT,
    name varchar(255),
    email varchar(255),
    password varchar(255),
  type_of varchar(255),
    created_at timestamp,
    updated_at timestamp,
    created_by_id int,
    updated_by_id int,
    PRIMARY key(id)

);


insert into users (name,email,password,type_of) values("prasanth","prasanth@gmail.com","1234virat","admin"),
("vignesh","vigneesh@gmail.com","vignesh","premium"),
("yuvaraj","yuvaraj@gmail.com","yuvaraj","premium");

CREATE TABLE artist(
id int NOT null  AUTO_INCREMENT,
    artist_name varchar(255) NOT null,
    created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY(id)
);

CREATE TABLE songs(
id int NOT null  AUTO_INCREMENT,
    song_name varchar(255),
    song_description varchar(255),
    artist_id int,
  created_at timestamp,
    updated_at timestamp,
    deleted_at  timestamp null,
    PRIMARY KEY (id),
    FOREIGN KEY (artist_id) REFERENCES artist(id) on delete cascade
);

create table songs_info(
id int not null AUTO_INCREMENT,
image_path varchar(255),
song_path varchar(255),
    song_id int,
 created_at timestamp,
    updated_at timestamp,
    create_by_id int,
    updated_by_id int,
    PRIMARY key (id),
        FOREIGN KEY (song_id) REFERENCES songs(id) on delete cascade
);


create table artist_images(
id int not null AUTO_INCREMENT,
image_path varchar(255),

    artist_id int,
 created_at timestamp,
    updated_at timestamp,
    create_by_id int,
    updated_by_id int,
    PRIMARY key (id),
        FOREIGN KEY (artist_id) REFERENCES artist(id) on delete cascade
);
alter table  artist_images add COLUMN artist_info varchar(255);


-- insert the artistname in the artist table
insert into artist (artist_name) values ("prasanth"),("arjune"),("lokesh");


-- insertint into the artist_image table

insert into artist_images(image_path,artist_id) values("ewrqrewrew","1"),("ewrqrewrew","2");
--
-- create table main(
-- id int,
-- name varchar(255),
-- created_at timestamp,
--     updated_at timestamp,
--     PRIMARY key(id)
-- )
