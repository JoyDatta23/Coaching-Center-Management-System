create table Subject( code varchar(15) not null, name char(50), primary key(code));

create table Department( name varchar(20)not null, level char(1) not null, duration varchar(10), Primary key(name, level));

create table Teacher( ID varchar(8) not null,user_name varchar(50),name varchar(50), password varchar(20), email varchar(50) not null, phone int(11), salary int(8), joining_date date, sub_code varchar(15), Primary key(ID), foreign key(sub_code) references Subject(code));

create table Student( ID int auto_increment,user_name varchar(50),name varchar(50), password varchar(20), email varchar(50) not null, phone int(11), Dep_name varchar(20), level char(1), enroll_date date default curdate(), Primary key(ID),foreign key(Dep_name, level) references Department(name, level));

create table Admin( ID varchar(8) not null,user_name varchar(50),name varchar(50), password varchar(20), email varchar(50) not null, phone int(11), Primary key(ID));

create table manages(A_id varchar(8),T_id varchar(8),S_id int,Dep_name varchar(20), level char(1) , Sub_code varchar(15), Primary key(A_id,T_id,S_id,Dep_name,level, Sub_code), Foreign key(A_id) references Admin(ID),Foreign key(T_id) references Teacher(ID) on delete cascade, Foreign key(S_id) references Student(ID) on delete cascade, Foreign key(Dep_name) references Department(name), Foreign key(Sub_code) references Subject(code));

create table have( Sub_code varchar(15), Dep_name varchar(20), level char(1), Primary key(Sub_code, Dep_name,level), Foreign key(Sub_code) references Subject(code), Foreign key(Dep_name, level) references Department(name,level));

create table Sub_content(Sub_code varchar(15), content varchar(50), Primary key(Sub_code,content), Foreign key(Sub_code) references Subject(code));
 
create table Schedule(Sub_code varchar(15), section int(2), room_no varchar(8), day1 varchar(11),day2 varchar(11), time time, primary key(section, Sub_code), foreign key (Sub_code) references Subject(code));

create table Grades(T_id varchar(8), S_id int, sub_code varchar(15), grade char(1), Primary key(T_id, S_id, sub_code), foreign key(T_id) references Teacher(ID) on delete cascade, foreign key(S_id) references Student(id) on delete cascade, Foreign key(sub_code) references Subject(code));

create table routine(T_id varchar(8), S_id int, sub_code varchar(15), section int(2), Primary key(T_id,S_id,sub_code,section), Foreign key(S_id) references Student(id) on delete cascade,Foreign key(T_id) references Teacher(id) on delete cascade,Foreign key(sub_code) references subject(code),Foreign key(section) references schedule(section));

insert into department values('sci','o','1 year'),('com','o','1 year'),('arts','o','1 year'),('sci','a','1 year'),('com','a','1 year'),('arts','a','1 year');

insert into subject values('PHY01','physics'),('CHE01','chemistry'),('BIO01','biology'),('MAT01','math'),('ENG01','english'),('BNG01','bangla'),('ACC01','accounting'),('BUS01','business'),('ECO01','economics'),('PHY02','physics'),('CHE02','chemistry'),('BIO02','biology'),('MAT02','math'),('ENG02','english'),('LAW02','law'),('LAW01','law'),('ACC02','accounting'),('BUS02','business'),('ECO02','economics');

insert into have values ('PHY01','sci','o'),('CHE01','sci','o'),('BIO01','sci','o'),('MAT01','sci','o'),('ENG01','sci','o'),('BNG01','sci','o'),('MAT01','arts','o'),('ENG01','arts','o'),('BNG01','arts','o'),('ECO01','arts','o'),('LAW01','arts','o'),('ACC01','com','o'),('BUS01','com','o'),('ECO01','com','o'),('MAT01','com','o'),('ENG01','com','o'),('BNG01','com','o'),('PHY02','sci','a'),('CHE02','sci','a'),('BIO02','sci','a'),('MAT02','sci','a'),('ENG02','arts','a'),('LAW02','arts','a'),('ECO02','arts','a'),('MAT02','arts','a'),('ACC02','com','a'),('BUS02','com','a'),('ECO02','com','a'),('MAT02','com','a');



insert into schedule values('ENG01',1,'203','Sunday','Tuesday','8:00'),('ENG01',2,'203','Monday','Wednesday','8:00'),('BIO01',1,'303','Sunday','Tuesday','3:30'),('BIO01',2,'303','Monday','Wednesday','3:30');
insert into schedule values('ACC01',1,'401','Sunday','Tuesday','12:30'),('ACC01',2,'401','Monday','Wednesday','12:30');
insert into schedule values('BNG01',1,'202','Sunday','Tuesday','9:30'),('BNG01',2,'202','Monday','Wednesday','9:30'),('MAT01',1,'201','Sunday','Tuesday','11:00'),('MAT01',2,'201','Monday','Wednesday','11:00');
insert into schedule values('PHY01',1,'301','Sunday','Tuesday','12:30'),('PHY01',2,'301','Monday','Wednesday','12:30'),('CHE01',1,'302','Sunday','Tuesday','2:00'),('CHE01',2,'302','Monday','Wednesday','2:00');
insert into schedule values('BUS01',1,'402','Sunday','Tuesday','2:00'),('BUS01',2,'402','Monday','Wednesday','2:00'),('ECO01',1,'403','Sunday','Tuesday','3:30'),('ECO01',2,'403','Monday','Wednesday','3:30');

insert into schedule values('MAT02',1,'201','Sunday','Tuesday','8:00'),('MAT02',2,'201','Monday','Wednesday','8:00'),('ACC02',1,'401','Monday','Wednesday','9:30'),('ACC02',2,'401','Monday','Wednesday','9:30'),('ECO02',1,'403','Monday','Wednesday','12:30'),('ECO02',2,'403','Monday','Wednesday','12:30'),('PHY02',1,'301','Sunday','Tuesday','11:00'),('PHY02',2,'301','Monday','Wednesday','11:00');
insert into schedule values('CHE02','1','302','Sunday','Tuesday','12:30'),('CHE02','2','302','Monday','Wednesday','12:30'),('BIO02','1','303','Sunday','Tuesday','2:00'),('BIO02','2','303','Monday','Wednesday','2:00');
insert into schedule values('ENG02',1,'203','Sunday','Tuesday','9:30'),('ENG02',2,'203','Monday','Wednesday','9:30');
insert into schedule values('LAW02',1,'404','Sunday','Tuesday','11:00'),('LAW02',2,'404','Monday','Wednesday','11:00'),('BUS02',1,'402','Sunday','Tuesday','11:00'),('BUS02',2,'402','Monday','Wednesday','11:00'),('LAW01',1,'404','Sunday','Tuesday','5:00'),('LAW01',2,'404','Monday','Wednesday','5:00');

insert into student(id,user_name,name,password,email,phone,dep_name,level) values (210015,'johnDoe','John Doe','johndoe123','johndoe@example.com',555123456,'sci','o');
insert into student(user_name,name,password,email,phone,dep_name,level) values('janeSmith','Jane Smith','Jsmith31','jane.smith@example.com',555987654,'sci','o'),('samBrown','Sam Brown','secret123','sam.brown@example.com',555555789,'com','o'),('lilyGreen','Lily Green','lily123','lily.green@example.com',555222333,'com','o'),('maxWhite','Max White','max567','max.white@example.com',555888999,'com','o');
insert into student(user_name,name,password,email,phone,dep_name,level) values ('emmaBrown','Emma Brown','Ebrown23','emma.brown@example.com',555123789,'sci','a'),('alexJohnson','Alex Johnson','Ajohn45','alex.johnson@example.com',555456321,'sci','a'),('saraMiller','Sara Miller','Smiller12','sara.miller@example.com',555789654,'com','a'),('michaelLee','Michael Lee','Mlee67','michael.lee@example.com',555987123,'com','a'),('oliviaDavis','Olivia Davis','Odavis89','olivia.davis@example.com',555654987,'arts','a'),('davidWilliams','David Williams','Dwill58','david.williams@example.com',555321456,'arts','a');


INSERT INTO sub_content VALUES
    ('PHY01','Force'),
    ('PHY01','Electricity'),
    ('PHY01','Waves'),
    ('PHY01','Electromagnetism'),
    ('CHE01','Bonding'),
    ('CHE01','Acid and bases'),
    ('CHE01','Organic'),
    ('BIO01','Cell'),
    ('BIO01','Genetics'),
    ('BIO01','Ecology'),
    ('MAT01','Algebra'),
    ('MAT01','Trigonometry'),
    ('MAT01','Geometry'),
    ('ENG01','Comprehension'),
    ('ENG01','Essay'),
    ('ENG01','Grammar and vocabulary'),
    ('ACC01','Transaction'),
    ('ACC01','Balancesheets'),
    ('BUS01','Marketing'),
    ('BUS01','Production'),
    ('ECO01','Demand and supply'),
    ('ECO01','Microeconomics'),
    ('ECO01','Macroeconomics'),
    ('BNG01','Grammar'),
    ('BNG01','Essay');

INSERT INTO sub_content VALUES
    ('PHY02','Radiation'),
    ('PHY02','Mechanics'),
    ('PHY02','Waves'),
    ('PHY02','Electromagnetism'),
    ('CHE02','Physical chemistry'),
    ('CHE02','Inorganic'),
    ('CHE02','Organic'),
    ('BIO02','Cell'),
    ('BIO02','Genetic and variation'),
    ('BIO02','Ecology and ecosystem'),
    ('MAT02','Algebra and trigonometry'),
    ('MAT02','Mechanics'),
    ('MAT02','Statistics'),
    ('ENG02','Analysis'),
    ('ENG02','Writing'),
    ('ENG02','Grammar and vocabulary'),
    ('ACC02','Financial accounting'),
    ('ACC02','Cost and management'),
    ('BUS02','Marketing'),
    ('BUS02','Human resource management'),
    ('ECO02','Microeconomics'),
    ('ECO02','Macroeconomics'),
    ('LAW02','Criminal law'),
    ('LAW02','Tort law'),
    ('LAW02','Contract law');


INSERT INTO Teacher(ID, user_name, name, password, email, phone, salary, joining_date, sub_code) VALUES ('T00053', 'johndoe123', 'John Doe', 'mysecretpassword', 'johndoe@example.com', 1234567890, 50000, '2023-01-15', 'PHY01');
INSERT INTO Teacher values('T00054', 'janedoe456', 'Jane Doe', 'janepassword123', 'janedoe@example.com', 9876543210, 60000, '2023-02-20','CHE01'),('T00055', 'smith007', 'Michael Smith', 'smithpass', 'msmith@example.com', 5551234567, 55000, '2023-03-25','BIO01'),('T00056', 'emilyk', 'Emily King', 'emilypass42', 'emily@example.com', 1112223333, 48000, '2023-04-30','MAT01'),('T00057', 'robsmith22', 'Robert Smith', 'robpass789', 'rob@example.com', 8889990000, 62000, '2023-05-05','ENG01');
INSERT INTO Teacher values('T00058', 'sarahmiller', 'Sarah Miller', 'sarahpass456', 'sarah@example.com', 3334445555, 57000, '2023-06-10', 'ACC01'),('T00059', 'alexjames87', 'Alex James', 'alexpass999', 'alex@example.com', 7778889999, 53000, '2023-07-15','BUS01');
INSERT INTO Teacher values('T00060', 'lisawhite23', 'Lisa White', 'lisapass777', 'lisa@example.com', 2223334444, 51000, '2023-07-20','ECO01');
INSERT INTO Teacher values('T00061', 'kevinbrown', 'Kevin Brown', 'kevinpass234', 'kevin@example.com', 4445556666, 58000, '2023-05-25','BNG01');
INSERT INTO Teacher values('T00062', 'amycarter', 'Amy Carter', 'amypass111', 'amy@example.com', 6667778888, 59000, '2023-05-30','LAW02');
INSERT INTO Teacher values('T00063', 'markjones', 'Mark Jones', 'markpass555', 'mark@example.com', 5556667777, 54000, '2023-01-05','PHY02');
INSERT INTO Teacher values ('T00064', 'annasmith', 'Anna Smith', 'annapass888', 'anna@example.com', 7778889999, 56000, '2023-07-10','CHE02');
INSERT INTO Teacher values ('T00065', 'chriswilson', 'Chris Wilson', 'chrispass222', 'chris@example.com', 9990001111, 60000, '2023-01-15','BIO02');
INSERT INTO Teacher values ('T00066', 'sandrabrown', 'Sandra Brown', 'sandrapass333', 'sandra@example.com', 1112223333, 57000, '2023-02-20','MAT02');
INSERT INTO Teacher values ('T00067', 'ryangreen', 'Ryan Green', 'ryanpass777', 'ryan@example.com', 3334445555, 55000, '2023-03-25','ENG02');
INSERT INTO Teacher values ('T00068', 'lisajones', 'Lisa Jones', 'lisapass444', 'lisa@example.com', 5556667777, 52000, '2023-04-30','BUS02');
INSERT INTO Teacher values ('T00069', 'brianmiller', 'Brian Miller', 'brianpass666', 'brian@example.com', 7778889999, 59000, '2023-05-05','ACC02');
INSERT INTO Teacher values ('T00070', 'jessicawhite', 'Jessica White', 'jessicapass999', 'jessica@example.com', 9990001111, 61000, '2023-06-10','ECO02');

INSERT into grades values
('T00053',210016,'PHY01','B'),
('T00054',210016,'CHE01','A'),
('T00055',210016,'BIO01','A'),
('T00056',210016,'MAT01','B'),
('T00060',210017,'ECO01','B'),
('T00058',210017,'ACC01','A'),
('T00059',210017,'BUS01','A'),
('T00056',210017,'MAT01','A'),
('T00060',210018,'ECO01','C'),
('T00058',210018,'ACC01','B'),
('T00059',210018,'BUS01','D'),
('T00056',210018,'MAT01','B'),
('T00060',210019,'ECO01','A'),
('T00058',210019,'ACC01','B'),
('T00059',210019,'BUS01','B'),
('T00056',210019,'MAT01','C'),
('T00063',210020,'PHY02','A'),
('T00064',210020,'CHE02','A'),
('T00065',210020,'BIO02','B'),
('T00066',210020,'MAT02','B'),
('T00053',210015,'PHY01',null),
('T00054',210015,'CHE01',null),
('T00055',210015,'BIO01','A'),
('T00056',210015,'MAT01','B'),
('T00063',210021,'PHY02','B'),
('T00064',210021,'CHE02','C'),
('T00065',210021,'BIO02',null),
('T00066',210021,'MAT02','A'),
('T00068',210022, 'BUS02', 'A'),
('T00070',210022, 'ECO02', null),
('T00066',210022, 'MAT02', 'C'),
('T00069',210023, 'ACC02', 'A'),
('T00068',210023, 'BUS02', null),
('T00070',210023, 'ECO02', null),
('T00066', 210023, 'MAT02', 'B'),
('T00068', 210024, 'ENG02', null),
('T00062', 210024, 'LAW02', null),
('T00070', 210024, 'ECO02', 'B'),
('T00066', 210024, 'MAT02', 'A'),
('T00068', 210025, 'ENG02', 'B'),
('T00062', 210025, 'LAW02', 'D'),
('T00070', 210025, 'ECO02', null),
('T00066', 210025, 'MAT02', null),
('T00069', 210022, 'ACC02', null);

INSERT into routine values
('T00053',210015,'PHY01',1),
('T00054',210015,'CHE01',1),
('T00065',210021,'BIO02',1),
('T00070',210022, 'ECO02', 2),
('T00068',210023, 'BUS02',1),
('T00070',210023, 'ECO02', 2),
('T00067', 210024, 'ENG02',1),
('T00062', 210024, 'LAW02', 1),
('T00070', 210025, 'ECO02', 2),
('T00066', 210025, 'MAT02', 2),
('T00069', 210022, 'ACC02', 2);

insert into admin values('Ad0001','Admin1','Admin','xyz228','admin@gmail.com',0187348387);