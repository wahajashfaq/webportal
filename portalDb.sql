CREATE DATABASE [portalDb]
GO
USE [portalDb]
GO

Create Table users
(
ID  int IDENTITY(1,1) primary key,
Name Varchar(50),
Lname varchar(50),
Email varchar(50),
ContactNumber Varchar(50),
Utype Varchar(20),
uaddress Varchar(100),
EntryDate datetime,
comments Varchar(600)
);

select * from users

Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Husnain','Ajmal','husnain.ajmal80@gmail.com','03030966241','Supplier','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Wahaj','Ashfaq','Wahaj.com','03030966241','Supplier','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Ali','Ajmal','AliAjmal80@gmail.com','03030966241','Supplier','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Werad','Ashfaq','Werad@gmail.com','03030966241','Supplier','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Gulzaib','Malik','Gullo@gmail.com','03030966241','Customer','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Ali','Butt','Butt@gmail.com','03030966241','Customer','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Khawar','Hussain','Khawar@gmail.com','03030966241','Customer','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Arham','shah','Arham0@gmail.com','03030966241','Customer','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')

Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Mudasar','Zaman','Mudasar@gmail.com','03030966241','Supplier','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Nomi','Shah','nomi@gmail.com','03030966241','Supplier','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Ghauri','Mannan','Ghauri@gmail.com','03030966241','Supplier','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Test1','testing','Gullo@gmail.com','03030966241','Customer','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('Test2','testing2','Butt@gmail.com','03030966241','Customer','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('KhawarBhai','HussainBHai','Khawar@gmail.com','03030966241','Customer','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
Insert into users(Name,Lname,Email,ContactNumber,Utype,uaddress,EntryDate,comments) values('ArhamG','boss','Arham@gmail.com','03030966241','Customer','Canal Bank',GetDate(),'Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging. Husnain is one of our best supplier since begginging')
