CREATE TABLE roleUser (
    idRole VARCHAR (50) NOT NULL,
    roleUser VARCHAR(5) NOT NULL,
    descripRole VARCHAR(50) NOT NULL,

    PRIMARY KEY (idRole)
);

-- Create the table user 
CREATE TABLE userE (
    idUser int NOT NULL AUTO_INCREMENT,
    nameUser VARCHAR(50) NOT NULL,
    mailUser VARCHAR(255) NOT NULL,
    passwordUser VARCHAR(255) NOT NULL,

    idRole VARCHAR (50) NULL,

    PRIMARY KEY (idUser),
    CONSTRAINT FK_roleUSer FOREIGN KEY (idRole) REFERENCES roleUser(idRole)

);

/*
Create the table role user which on idUser is a foreign key
the format of the roleUser keys will be like (UREG/UTEA/UADM)
this three terms stands for UserRegistrated(UREG), UserTeacher(UTEA) and
UserAdministrator(UADM)
*/


-- Create table room
CREATE TABLE room (
    idRoom VARCHAR(10) NOT NULL,
    floorRoom int(5) NOT NULL,

    PRIMARY KEY(idRoom)
);

-- Create table Component's category
Create TABLE compCategory (
    idCategory VARCHAR(10) NOT NULL,
    nameCategory VARCHAR(20) NOT NULL,
    descripCategory VARCHAR(255) NOT NULL,
    imgCategory VARCHAR(250) DEFAULT 'https://i.postimg.cc/15b7GMSh/noimg.jpg',

    PRIMARY KEY (idCategory)
);

/* 
insert into compCategory (idCategory, nameCategory, descripCategory, imgCategory) values ('HARDW','Hardware','hardware components','https://images.unsplash.com/photo-1561883088-039e53143d73?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
insert into compCategory (idCategory, nameCategory, descripCategory, imgCategory) values ('SOFTW','Software','software components','https://images.unsplash.com/photo-1613490900233-141c5560d75d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80');
insert into compCategory (idCategory, nameCategory, descripCategory, imgCategory) values ('FURNIT','Furniture','furniture components','https://images.unsplash.com/photo-1610775917800-a3ced40937ac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80');
 */


-- Create table Component
CREATE TABLE component (
    idComponent int NOT NULL AUTO_INCREMENT,
    nameComponent VARCHAR(50) NOT NULL,
    descripComponent VARCHAR(255) NOT NULL,

    idCategory VARCHAR(10) NOT NULL,

    PRIMARY KEY (idComponent),
    FOREIGN KEY (idCategory) REFERENCES compCategory(idCategory)
);

-- Create table Events
CREATE TABLE events (
    idEvent int NOT NULL AUTO_INCREMENT,
    userEvento VARCHAR(50) NOT NULL,
    mailEvento VARCHAR(255) NOT NULL,
    device VARCHAR(50) NOT NULL,
    eventDate DATE NOT NULL,

    descripEvent VARCHAR(255) NOT NULL,
    importanceEvent VARCHAR(255) NOT NULL,

    -- Foreign Keys
    idRoom VARCHAR(10) NOT NULL,
    floorRoom int(5) NOT NULL,
    label VARCHAR(50) NOT NULL,
    idUser int,

    PRIMARY KEY (idEvent),
    CONSTRAINT FK_roomsID FOREIGN KEY (idRoom) REFERENCES room(idRoom),
    CONSTRAINT FK_userEvent FOREIGN KEY (idUser) REFERENCES userE(idUser)
    /*
    -- We understand that in one event can be implicated ONE room, but one room COULD HAVE
    more than one event

    --  We understand that one user could have one or more events, but the user only can create on event at the time
    */
);

CREATE TABLE DeletedEvents (
    idEvent VARCHAR(5) NOT NULL,
    userEvento VARCHAR(50) NOT NULL,
    mailEvento VARCHAR(255) NOT NULL,
    device VARCHAR(50) NOT NULL,
    eventDate DATE NOT NULL,

    descripEvent VARCHAR(255) NOT NULL,
    importanceEvent VARCHAR(255) NOT NULL,

    idRoom VARCHAR(10) NOT NULL,
    floorRoom int(5) NOT NULL,
    label VARCHAR(50) NOT NULL,
    idUser int NOT NULL,
    PRIMARY KEY (idEvent)
);

CREATE TABLE Supplier (
    idSupp int NOT NULL AUTO_INCREMENT,
    nameSupp VARCHAR(50) NOT NULL,
    phoneSupp int(9) NOT NULL,
    productSupp VARCHAR(255) NOT NULL,
    mailSupp VARCHAR(255) NOT NULL,
    addressSupp VARCHAR(100) NOT NULL,
    billSupp VARCHAR(250) DEFAULT NULL,
    imgSupp VARCHAR(250) DEFAULT 'https://i.postimg.cc/15b7GMSh/noimg.jpg',
    
    
    PRIMARY KEY (idSupp)
);

/* 
ALTER TABLE Supplier ALTER imgSupp SET DEFAULT 'https://i.postimg.cc/15b7GMSh/noimg.jpg';
UPDATE `Supplier` SET `imgSupp` = '(IMG-URL)' WHERE `Supplier`.`idSupp` = (NUMBER);
 */

/* Creation of the trigger */
DELIMITER $$

CREATE TRIGGER delete_Events
BEFORE DELETE
ON events FOR EACH ROW
BEGIN
	INSERT INTO DeletedEvents (idEvent,userEvento,mailEvento,device,eventDate,descripEvent,importanceEvent,idRoom,floorRoom,label,idUser)
    VALUES (old.idEvent,old.userEvento,old.mailEvento,old.device,old.eventDate,old.descripEvent,old.importanceEvent,old.idRoom,old.floorRoom,old.label,old.idUser);
END$$    

DELIMITER ;