create database peduli;
create table user(nik varchar(16) primary key, nama varchar(60));
create table catat(nik varchar(16), tgl date, waktu time, lokasi varchar(60), suhu integer);