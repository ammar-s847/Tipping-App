/* User Table */
CREATE TABLE users (
    id VARCHAR(64) NOT NULL,
    name VARCHAR(64) NOT NULL,
    pwd VARCHAR(64) NOT NULL,
    email VARCHAR(64) NOT NULL,
    cardNum INT(20) NULL,
    res_id VARCHAR(64) NULL,
    totalTips DECIMAL(8, 0) NULL
);

/* Restaurant Table */
CREATE TABLE restaurants (
    res_id VARCHAR(64) NOT NULL,
    res_name VARCHAR(64) NOT NULL,
    pwd VARCHAR(64) NOT NULL,
    email VARCHAR(64) NOT NULL,
    res_address VARCHAR(64) NULL
);

/* Employee Table */
/*
CREATE TABLE employees (
    emp_id VARCHAR(64) NOT NULL,
    name VARCHAR(64) NOT NULL,
    pwd VARCHAR(64) NOT NULL,
    email VARCHAR(64) NOT NULL,
    res_id VARCHAR(64) NOT NULL,
    cardNum INT(20) NULL
);*/