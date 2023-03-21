create database toDoListDB;


use todolistdb;


create table User(user_id integer primary key, username varchar(30) unique, email varchar(70) unique,password varchar(50));


create table task(task_id integer primary key, task_name varchar(255) not null, task_description varchar(65535), due_date date, status varchar(30) not null);


create table Category(category_id integer primary key, category_name varchar(255) not null);


create table User_task(user_id integer, task_id integer, foreign key(user_id) references User(user_id), foreign key(task_id) references task(task_id));


create table task_reminder(task_id integer, foreign key(task_id) references task(task_id), reminder_date_time datetime, reminder_triggered boolean);


