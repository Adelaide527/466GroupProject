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
	('2020-01-21', '210'),
	('2020-02-02', '170'),
	('2020-02-03', '110'),
	('2020-02-04', '123'),
	('2020-02-05', '105'),
	('2020-02-06', '120'),
	('2020-02-07', '122'),
	('2020-02-08', '95'),
	('2020-02-09', '170'),
	('2020-02-10', '125');

INSERT INTO Records(ID,Date_)
	VALUES
	('1','2020-01-21'),
	('4','2020-02-08'),
	('3','2020-02-04'),
	('2','2020-02-03'),
	('6','2020-02-05'),
	('5','2020-02-02'),
	('7','2020-02-06'),
	('8','2020-02-07'),
	('10','2020-02-09'),
	('9','2020-02-10');

INSERT INTO Workout(Date_,Intensity, Type_, Duration, Calories_Burnt)
	VALUES
	('2020-01-21','Medium', 'Jogging', '25', '50'),
	('2020-02-03','Low', 'Walking', '20', '21'),
	('2020-02-04','High', 'Sprints', '30', '100'),
	('2020-02-05','Low','Walking','35','37'),
	('2020-02-06','High','Sprints','45','125'),
	('2020-02-08','Medium','Jogging','60','130'),
	('2020-02-15','High','Sprints','30','100'),
	('2020-03-01','Low','Walking','75','95'),
	('2020-03-04','Low','Walking','75','95');

INSERT INTO Does_Workout(ID,Date_)
	VALUES
	('1','2020-01-21'),
	('2','2020-02-03'),
	('3','2020-02-04'),
	('1', '2020-02-05'),
	('1', '2020-02-06'),
	('2', '2020-02-08'),
	('3', '2020-02-15'),
	('3', '2020-03-01'),
	('2', '2020-03-04');

/*If it is a food, then the unit is g. If it is a bev, the unit is oz*/
INSERT INTO Food_Bev(Fname, Serving_Size, Calories, Type)
	VALUES
	('Cheese', '28', '113', 'Food'),
	('Tea', '8', '2', 'Bev'),
	('Steak', '73', '679', 'Food'),
	('Chicken', '128', '335', 'Food'),
	('Egg', '50', '78', 'Food'),
	('Water', '8', '0', 'Bev'),
	('Coffee', '8', '1', 'Bev'),
	('Coke', '12', '140', 'Bev'),
	('Rice', '128', '206', 'Food');

INSERT INTO Nutrient(Sname, Rec_val)
	VALUES
	('Carbohydrates', '225g-325g'),
	('Fats', '78g'),
	('Fiber', '28g'),
	('Calcium', '1300mg'),
	('Protein', '50g'),
	('Vitamin C', '90mg');

INSERT INTO Sig_Nutrient(Fname,Sname,Amount)
	VALUES
	('Egg','Protein','10g'),
	('Cheese','Carbohydrates','45g'),
	('Chicken','Protein','20g'),
	('Steak','Protein','25g'),
	('Tea','Vitamin C','50mg'),
	('Coke','Carbohydrates','125g');

/*The serving is still in g/oz*/
INSERT INTO Eats(Fname, ID, Eat_Date, Serving)
	VALUES
	('Chicken','2','2020-01-30', 128),
	('Water','2', '2020-02-01', 8),
	('Egg','1', '2020-02-02', 50),
	('Coffee','1', '2020-02-03', 8),
	('Coke','3', '2020-02-04', 8),
	('Steak','3', '2020-02-05', 73),
	('Rice','5', '2020-02-06', 128),
	('Cheese','6', '2020-02-08', 28),
	('Tea','5', '2020-02-09', 8);

INSERT INTO Conversion(From_, To_, Rate)
	VALUES
	('c', 'g', 128.0),
	('mg', 'g', 0.001),
	('g', 'g', 1.0),
	('kg', 'g', 1000.0),
	('lb', 'g', 453.592),
	('oz', 'oz', 1.0),
	('ml', 'oz', 0.034);
