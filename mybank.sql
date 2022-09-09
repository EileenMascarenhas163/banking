create database farzi_bank;
CREATE TABLE UserSignup (
uname VARCHAR(30) NOT NULL,
pswd VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
        
create table bank(
state_branch varchar(30),
branchno int primary key,
ifsc varchar(11));
        
create table newAccount(
fname varchar(30),
lname varchar(30),
email varchar(30),
city varchar(30),
state varchar(30),
zip int ,
address varchar(30),
adhaar varchar(15),
gender varchar(30),
dob date,
phone int,
accountno VARCHAR(15) primary key,
t_savings int);


CREATE TABLE balance(
    accountno VARCHAR(15),
    deposit INT,
    withdraw INT,
    t_savings INT ,
    date_ TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
insert into UserSignup values('hnkfjewn','jshikj\cli','2017-12-15 04:30:48');
insert into bank values('jshikj',5656,'652556252');
insert into newAccount values('djb\cjdn','jshikj','kdkjdjoc','djchkj','jfaekjh',5625,'jac\kja',
'556666','ankcan','2017-12-15',66565596,5652,'4556625','56636663',50000);
insert into balance values('56636663',0,0,50000,current_timestamp());


/*
UPDATE balance
SET t_savings = t_savings-40000
WHERE accountno = '56636663';

UPDATE newAccount
SET t_savings = 10000  
WHERE accountno = '56636663';


        
select * from UserSignup;
select * from bank;
select * from newAccount;
select * from balance;
*/