CREATE TABLE user (
	id int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    password varchar(200) NOT NULL,
    firstname varchar(100) NOT NULL,
    lastname varchar(100) NOT NULL,
    userlevel varchar(1) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO user 
VALUE ('', 'Mint12345', '827ccb0eea8a706c4c34a16891f84e7b', 'Wattanachai', 'maneekham', 'm');