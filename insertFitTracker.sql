INSERT INTO Account(ID, Name, Height)
	VALUES
	('1', 'Randy Smith', '6ft 0in'),
	('2', 'Rolf Johnson', '5ft 6in'),
	('3', 'Edward Williams', '5ft 0in'),
	('4', 'Jane Jones', '5ft 3in'),
	('5', 'Ashley Garcia', '5ft 4in'),
	('6', 'Ash Davis', '5ft 6in'),
	('7', 'Sam Brown', '5ft 9in'),
	('8', 'Nico Lopez', '4ft 11in'),
	('9', 'Zackary Miller', '5ft 11in'),
	('10', 'Lorelei Anderson', '5ft 5in'); 

INSERT INTO Weight(Date_, Weight)
	VALUES
	('01/21/2020', '210'),
	('02/02/2020', '170'),
	('02/03/2020', '110'),
	('02/04/2020', '123'),
	('02/05/2020', '105'),
	('02/06/2020', '120'),
	('02/07/2020', '122'),
	('02/08/2020', '95'),
	('02/09/2020', '170'),
	('02/10/2020', '125');

INSERT INTO Workout(Intensity, Type_, Duration, Calories_Burnt)
	VALUES
	('Medium', 'Jogging', '25', '50'),
	('Low', 'Walking', '20', '21'),
	('High', 'Sprints', '30', '100');

INSERT INTO Food_Bev(Fname, Serving_Size, Calories)
	VALUES
	('Cheese', '1 ounce', '113'),
	('Tea', '8fl ounces', '2'),
	('Steak', '1 steak', '679'),
	('Chicken', '1 cup', '335'),
	('Egg', '1 large egg', '78'),
	('Water', '1 cup', '0'),
	('Coffee', '1 cup', '1'),
	('Coke', '12 ounces', '140'),
	('Mash Potatoes', '1 cup', '214'),
	('Rice', '1 cup', '206');

INSERT INTO Nutrient(Sname, Rec_val)
	VALUES
	('Carbohydrates', '225g-325g'),
	('Fats', '78g'),
	('Fiber', '28g'),
	('Calcium', '1300mg'),
	('Protein', '50g'),
	('Vitamin C', '90mg');

INSERT INTO Eats(Fname, Eat_Date)
	VALUES
	('Chicken', '01/30/2020'),
	('Water', '02/01/2020'),
	('Egg', '02/02/2020'),
	('Coffee', '02/03/2020'),
	('Coke', '02/04/2020'),
	('Steak', '02/05/2020'),
	('Rice', '02/06/2020'),
	('Mash Potatoes', '02/07/2020'),
	('Cheese', '02/08/2020'),
	('Tea', '02/09/2020');
