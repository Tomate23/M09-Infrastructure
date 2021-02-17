CREATE TABLE roleUser (
    idRole int NOT NULL AUTO_INCREMENT,
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

    idRole int  NULL,

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
    imgCategory text NULL,

    PRIMARY KEY (idCategory)
);

-- Create table Component
CREATE TABLE component (
    idComponent int NOT NULL AUTO_INCREMENT,
    nameComponent VARCHAR(50) NOT NULL,
    descripComponent VARCHAR(255) NOT NULL,
    label VARCHAR(50) NOT NULL,

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