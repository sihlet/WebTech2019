
drop schema if exists AshFac;
create schema AshFac;
use AshFac;

create table USER(
UserId int  not null AUTO_INCREMENT, 
Name varchar(120) not null, 
Email varchar(120) not null, 
Phone varchar(12) not null, 
Role enum("Student","Faculty","Support") not null,
Reason varchar(10000) not null,
primary key(UserId));

create table Facility(
FacilityId int not null AUTO_INCREMENT, 
Name varchar(120) not null, 
Type enum("Lecture Hall","Conference Room","Seminar Room") not null, 
primary key(FacilityId));

create table Timez(
TimeId int not null AUTO_INCREMENT, 
timeRecord time not null, 
dateRecord date not null, 
primary key(TimeId));

create table Booking(
UserId int not null AUTO_INCREMENT, 
FacilityId int not null,
TimeId int not null,
Status enum("Verified", "Not verified") not null,
foreign key (UserId) references USER(UserId),
foreign key (FacilityId) references Facility(FacilityId),
foreign key (TimeId) references Timez(TimeId));