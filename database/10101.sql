drop schema if exists 10101;
create schema 10101;
use 10101;

create table USER(
UserId int (100) not null, 
Name varchar(120) not null, 
Email varchar(120) not null, 
Phone varchar not null, 
Role enum("Student","Faculty","Support") not null, 
primary key(UserId));

create table Facility(
FacilityId int (100) not null, 
Name varchar(120) not null, 
Type enum("Lecture Hall","Conference room","Seminar room") not null, 
primary key(FacilityId));

create table Timez(
TimeId int (100) not null, 
timeRecord time(120) not null, 
dateRecord date(120) not null, 
primary key(TimeId));

create table Booking(
 UserId int(100) not null, 
 FacilityId int(100) not null,
 TimeId int(100) not null,
 Status enum("Verified", "Not verified") not null,
 foreign key (UserId) references USER(UserId),
 foreign key (FacilityId) references Facility(FacilityId),
 foreign key (TimeId) references Timez(TimeId));