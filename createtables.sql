
create TABLE Book ( ISBN int,
title char(50),
author char(50),
publisher char(50),
primary key (ISBN));
-- build the table physicalcopy with primary key catalogno
create TABLE PhysicalCopy (catalogNo int,
title char(50),
overdueChargePerDay int,
primary key (catalogNo));
-- build table reader with primary key username
create table Reader(username char(50),
user_city char(50),
email char(50),
telephone bigint,
primary key (username));
-- build table loan with primary key combination and one foreign key
create table Loan (username char(50),
catalogNo int,
dateOut date,
dateIn date,
duedate date,
constraint loan_keys primary key (username, catalogNo, dateOut),
foreign key (catalogNo) references PhysicalCopy(catalogNo) );
-- insert values
insert into Book values
(100001, 'Computer Architecture', 'Hennessy', 'McGrawHill'), 
(100002, 'Introduction to Algorithms', 'Cormen', 'MIT Press'), 
(100003, 'Mastering Linux', 'Wang', 'Elsevier'),
(100004, 'Introduction to Java Programming', 'Liang', 'Prentice Hall'),
(100005, 'Systems Architecture', 'Burd', 'Course Technology');
insert into Reader values
('Abe','Lincoln', 'Abe@unl.edu', 4020000001), ('Bob','Omaha', 'Bob@unl.edu', 4020000002),('Chuck','Lincoln', 'Chuck@unl.edu', 4020000003),('David','Omaha', 'David@unl.edu', 4020000004)
;
insert into PhysicalCopy values
(2010, 'Computer Architecture', 1), (2011, 'Computer Architecture', 1), (2012, 'Computer Architecture', 1),
(2021, 'Introduction to Algorithms', 2), (2022, 'Introduction to Algorithms', 2), (2023, 'Introduction to Algorithms', 2),
(2031, 'Mastering Linux', 3), (2032, 'Mastering Linux', 3), (2033, 'Mastering Linux', 3),
(2041, 'Introduction to Java Programming', 4), (2042, 'Introduction to Java Programming', 4), (2043, 'Introduction to Java Programming', 4),
(2051, 'System Architecture', 5), (2052, 'System Architecture', 5), (2053, 'System Architecture', 5)
;
insert into Loan values
('Abe', 2010, '2012-07-01', '2012-09-01', '2012-08-01'), ('Abe', 2041, '2012-09-01', null, '2012-10-01'), ('Abe', 2032, '2012-09-01', '2012-09-15', '2012-10-01'),
('Bob', 2011, '2012-08-01', '2012-09-15', '2012-09-01'), ('Bob', 2023, '2012-09-01', '2012-09-15', '2012-10-01'), ('Bob', 2042, '2012-09-01', null, '2012-10-01'),
('Chuck', 2051, '2012-09-01', '2012-09-15', '2012-10-01'), ('Chuck', 2031, '2012-09-01', '2012-10-15', '2012-10-01'),
('David', 2052, '2012-09-01', '2012-10-10', '2012-10-01'), ('David', 2022, '2012-08-01', '2012-09-15', '2012-09-01');
