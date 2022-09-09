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


INSERT INTO `balance` (`accountno`, `deposit`, `withdraw`, `t_savings`, `date_`) VALUES
('592127632151207', 1000, 0, 14522, '2022-09-05 21:03:17');



INSERT INTO `bank` (`state_branch`, `branchno`, `ifsc`) VALUES
('Haryana', 7000, '00DB55656'),
('West Bengal', 8000, '00DB55656'),
('Jharkhand', 8001, '00DB55656'),
('Karnataka', 8002, '00DB55656'),
('Kerala', 8003, '00DB55656'),
('Madhya Pradesh', 8004, '00DB55656'),
('Maharashtra', 8005, '00DB55656'),
('Arunachal Pradesh', 8006, '00DB58006'),
('Chhattisgarh', 8008, '00DB55656'),
('Meghalaya', 8011, '00DB55656'),
('Mizoram', 8012, '00DB55656'),
('Nagaland', 8013, '00DB55656'),
('Odisha', 8014, '00DB55656'),
('Punjab', 8015, '00DB55656'),
('Rajasthan', 8016, '00DB55656'),
('Sikkim', 8017, '00DB55656'),
('Tamil Nadu', 8018, '00DB55656'),
('Telangana', 8019, '00DB55656'),
('Tripura', 8020, '00DB55656'),
('Uttarakhand', 8021, '00DB55656'),
('Uttar Pradesh', 8022, '00DB55656'),
('Andhra Pradesh', 8040, '0010DB58040'),
('Goa', 8070, '00DB55656'),
('Jammu and Kashmir', 8080, '00DB55656'),
('Manipur', 8088, '00DB55656'),
('Himachal Pradesh', 8700, '00DB55656'),
('Gujarat', 8750, '00DB55656'),
('Assam', 8778, '00DB58778'),
('Bihar', 8800, '00DB55656');

     
INSERT INTO `newaccount` (`fname`, `lname`, `email`, `city`, `state`, `zip`, `address`, `adhaar`, `gender`, `dob`, `phone`, `accountno`, `t_savings`) VALUES
('Eileen', 'Mascarenhas', 'a208.eileenmas@gmail.com', 'Mumbai', 'Andhra Pradesh', 400079, 'C 22/2 BMC colony Parksite Vik', '512551125565315', 'Female', '2022-09-14', 2147483647, '592127632151207', 0);

INSERT INTO `usersignup` (`uname`, `pswd`, `reg_date`) VALUES
('leo', '0f759dd1ea6c4c76cedc299039ca4f', '2022-09-05 19:43:37');

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
