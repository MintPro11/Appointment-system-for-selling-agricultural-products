CREATE TABLE form_user (
    id_form int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    date1 date NOT NULL,
    time1 time NOT NULL,
    name1 varchar(50) NOT NULL,
    phone varchar(10) NOT NULL,
    unit varchar(50) NOT NULL,
    status varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
