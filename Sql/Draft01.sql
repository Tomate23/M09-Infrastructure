-- Create the table user 
CREATE TABLE userE (
    idUser int NOT NULL AUTO_INCREMENT,
    nameUser VARCHAR(50) NOT NULL,
    mailUser VARCHAR(255) NOT NULL,
    passwordUser VARCHAR(255) NOT NULL,

    PRIMARY KEY (idUser)
);

/*
Create the table role user which on idUser is a foreign key
the format of the roleUser keys will be like (UREG/UTEA/UADM)
this three terms stands for UserRegistrated(UREG), UserTeacher(UTEA) and
UserAdministrator(UADM)
*/
CREATE TABLE roleUser (
    roleUser VARCHAR(5) NULL NULL,
    idUser int NOT NULL AUTO_INCREMENT,

    PRIMARY KEY (roleUser),
    CONSTRAINT FK_userRole FOREIGN KEY (idUser) REFERENCES userE(idUser)
    -- In order to make easier DROP foreign key in the future, we specify the name of the CONSTRAINT
);

-- Create table room
CREATE TABLE room (
    idRoom VARCHAR(10) NOT NULL,
    floorRoom int(5) NOT NULL,

    PRIMARY KEY(idRoom)
);
-- Create table Events
CREATE TABLE event (
    idEvent int NOT NULL AUTO_INCREMENT,
    descripEvent VARCHAR(255) NOT NULL,
    importanceEvent VARCHAR(255) NOT NULL,

    -- Foreign Keys
    idRoom VARCHAR(10) NOT NULL,
    idUser int,

    PRIMARY KEY (idEvent),
    CONSTRAINT FK_roomsFloor FOREIGN KEY (idRoom) REFERENCES room(idRoom),
    CONSTRAINT FK_userEvent FOREIGN KEY (idUser) REFERENCES userE(idUser)
    /*
    -- We understand that in one event can be implicated ONE room, but one room COULD HAVE
    more than one event

    --  We understand that one user could have one or more events, but the user only can create on event at the time
    */
);

-- Create table Component's category
Create TABLE compCategory (
    idCategory VARCHAR(10) NOT NULL,
    nameCategory VARCHAR(20) NOT NULL,
    descripCategory VARCHAR(255) NOT NULL,

    PRIMARY KEY (idCategory)
);

-- Create table Component
CREATE TABLE component (
    idComponent int NOT NULL AUTO_INCREMENT,
    descripComponent VARCHAR(255) NOT NULL,
    nameComponent VARCHAR(50) NOT NULL,

    idEvent int NOT NULL,
    idCategory VARCHAR(10) NOT NULL,
    idRoom VARCHAR(10) NOT NULL,

    PRIMARY KEY (idComponent),
    
    FOREIGN KEY (idEvent) REFERENCES event(idEvent),
    FOREIGN KEY (idCategory) REFERENCES compCategory(idCategory),
    FOREIGN KEY (idRoom) REFERENCES room(idRoom)
);








