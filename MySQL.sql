use mydatabase;
create table employee(name text, age int, empid int primary key, doj date);
create table empsalary(empid int primary key, salary int);
commit;