create table users( 
 id bigserial primary key,
 first name varchar (30) not null,
 last name varchar(30) not null,
 mobile_number varchar (20) not null,
 ide_number varchar(15) noy null unique,
 address text null,
 birhdate date null,
 email varchar (200) not null unique,
 password text not null,
 status boolean not null default true,
 created_at timestamptz not null default now(),
 update_at timestamptz not null default now(),
 deleted_at timestamptz null
);

--insert into table
INSERT INTO users(
firstname, 
lastname, 
mobile_number,
email,
password 
);

VALUES (
'Nicolle',
'Quijano',
'3184830987',
'nico@mail.com',
'1234'
);