DROP TABLE IF EXISTS Eats;
DROP TABLE IF EXISTS Sig_Nutrient;
DROP TABLE IF EXISTS Nutrient;
DROP TABLE IF EXISTS Food_Bev;
DROP TABLE IF EXISTS Does_Workout;
DROP TABLE IF EXISTS Workout;
DROP TABLE IF EXISTS Records;
DROP TABLE IF EXISTS Weight;
DROP TABLE IF EXISTS Account;


CREATE TABLE Account(
	ID int NOT NULL AUTO_INCREMENT,
	Name char(20) NOT NULL,
	Height char(20) NOT NULL,

	PRIMARY KEY (ID)
);

CREATE TABLE Weight(
	Date_ char(20) NOT NULL,
	Weight int NOT NULL,

	PRIMARY KEY (Date_)
);

CREATE TABLE Records(
	ID int NOT NULL AUTO_INCREMENT,
	Date_ char(20) NOT NULL,

	FOREIGN KEY (ID) references Account(ID),
	FOREIGN KEY (Date_) references Weight(Date_)
);

CREATE TABLE Workout(
	Date_ char(20),
	Intensity char(20) NOT NULL,
	Type_ char(20) NOT NULL,
	Duration int NOT NULL,
	Calories_Burnt int NOT NULL,

	PRIMARY KEY (Date_)
);

CREATE TABLE Does_Workout(
	ID int NOT NULL AUTO_INCREMENT,
	Date_ char(20) NOT NULL,
	
	FOREIGN KEY (ID) references Account(ID),
	FOREIGN KEY (Date_) references Workout(Date_)
);

CREATE TABLE Food_Bev(
	Fname char(20) NOT NULL,
	Serving_Size char(20) NOT NULL,
	Calories int NOT NULL,

	PRIMARY KEY (Fname)
);

CREATE TABLE Nutrient(
	Sname char(20) NOT NULL,
	Rec_val int NOT NULL,
	Amount int NOT NULL,

	PRIMARY KEY (Sname)
);

CREATE TABLE Sig_Nutrient(
	Fname char(20) NOT NULL,
	Sname char(20) NOT NULL,

	FOREIGN KEY (Fname) references Food_Bev(Fname),
	FOREIGN KEY (Sname) references Nutrient(Sname)
);

CREATE TABLE Eats(
	Fname char(20) NOT NULL,
	ID int NOT NULL,
	Eat_Date char(20) NOT NULL,

	FOREIGN KEY (Fname) references Food_Bev(Fname),
	FOREIGN KEY (ID) references Account(ID)
);


