create table courses(id serial primary key, course_name varchar(50), 
course_code varchar(5), course_fees int, duration int, duration_type char(1)
added_date timestamp default current_timestamp, modified_date timestamp null,
status boolean);