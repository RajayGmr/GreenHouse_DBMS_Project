-- **list database**

-- Create customers table

CREATE TABLE `customers` (
  `name` varchar(50) DEFAULT NULL,
  `Id` int(11) NOT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Mobile Number` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

--Insertion

INSERT INTO customers (`Name`, `Id`,  `Gender`, `Mobile Number`) 
VALUES ('Rohan', '1', 'M','09-35-230-253'),('Maya', '2', 'F','09-45-130-161'),
('Leen', '3', 'F','09-64-225-670'),('Alishba', '4', 'F','09-45-420-876'),
 ('kofee', '5', 'F','08-73-834-451'),('Arfan', '6', 'M','09-78-774-751'),
 ('Natasha', '7', 'F','08-45-430-441'),('Aneeq', '8', 'M','09-85-750-753'),
 
 ('rajay', '9', 'M','09-38-843-583'),('Hyder', '10', 'M','09-63-262-352'),
('shupti', '11', 'F','08-33-136-631'),('Asfana', '12', 'F','08-42-620-630'),
 ('Ebrah', '13', 'M','09-21-630-257'),('Rasheda', '14', 'F','09-24-725-035'),
 ('Christopher', '15', 'M','09-95-830-751'),('Shepro', '16', 'M','09-15-512-751'),
 ('Tazrian', '17', 'F','09-34-330-751'),('Shaafi', '18', 'M','09-51-444-751'),
 ('Tasfia', '19', 'F','08-11-132-751'),('Neha', '20', 'F','09-44-034-751');




--Create gardeners  table

CREATE TABLE `gardeners` (
  `Name` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL,
  `Birthdate` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Joined year` smallint(6) NOT NULL,
  `Salary` decimal(65,0) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

--Insertion

INSERT INTO `gardeners` 
(`Name`, `Id`, `Birthdate`, `Address`, `Joined year`, `Salary`) 
VALUES ('Anas', '1001', '1999-03-29', 'Grilled Town', '2020', '24000'), 
('Asfana', '1002', '2005-07-04', 'Sukhumvit 55,thonglor soi 18,
Tower B', '2021', '19000')
,('Alicia', '1003', '1987-03-29', 'Sukhumvit soi 71,Nich apartment', '2019', '27000'), 
('Amna', '1004', '1999-07-04', 'pattaya city,gracious apartment', '20120', '28000'),
('Anika', '1005', '1987-03-29', 'Ramkamhaeng,huamak', '2018', '27000'), 
('Pranto', '1006', '1999-08-09', 'Onnut Road,streetsvalley', '2020', '14000'),
('Deepti', '1007', '2000-03-29', 'Sukhumvit 55,clover apartment', '2019', '27000'), 
('Preeyarat', '1008', '20002-08-20', 'Taipeng tower', '2019', '8000'),
('Mashfy', '1009', '1999-08-21', 'Victory monument road,janicia hub', '2018', '29000'),
('Sadad', '1010', 'Luxary condo ,near bts nana', '2017', '2019', '8000'),
('Ayaaz', '1011', '1997-08-21', 'Phuket city,nanaria apartment', '2019', '9000'),
('Amna', '10012', '1999-07-04', 'pattaya city,gracious apartment', '20120', '8000');



--**shopping_cart database**

--Create orders table

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(10) NOT NULL,
  `products` varchar(50) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

--Insertion
INSERT INTO orders VALUES(12, 'Ashika Yeasmin Angkur', 'u6228006@au.edu', '+66949730751', 'sukhumvit 55', 'cod', 'Boston Fern(1)', 300);
INSERT INTO orders VALUES(13, 'asfana', 'asfana22@gmail.com', '0982372811', 'Hua Hin, villa 66', 'cards', 'Hydrilla(1)', 290);
INSERT INTO orders VALUES(14, 'Sattavath', 'u6228009@au.edu', '0933860614', 'Laos', 'cod', 'Snake Plant(1)', 305);
INSERT INTO orders VALUES(15, 'Rasheda Begum', 'begumrasheda10@yahoo.com', '0927346348', 'sukhumvit 55', 'cod', 'Bunny ear cactus(3)', 2370);


--Create Products table

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--Insertion

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Mushroom Plant', '1500', 1, 'images/mushroom.jpg', 'p1000'),
(2, ' "In the Mood" Rose', '200', 1, 'images/rose.jpg', 'p1001'),
(3, 'Croton Plant', '290', 1, 'images/croton.jpg', 'p1002'),
(4, 'Boston Fern', '300', 1, 'images/bostonFern.jpg', 'p1003'),
(5, 'Snake Plant', '305', 1, 'images/snake.jpg', 'p1004'),
(6, 'Devil ivy', '400', 1, 'images/devilsIvy.jpg', 'p1005'),
(7, 'Hydrilla', '290', 1, 'images/hydrilla.jpg', 'p1006'),
(8, 'Peace Lily', '350', 1, 'images/peaceLily.jpg', 'p1007'),
(9, 'Bunny ear cactus', '790', 1, 'images/cactus.jpg', 'p1008'),
(10, 'Jade', '700', 1, 'images/jade.jpg', 'p1009'),

(11, 'Fresh Big Mango', '50', 1, 'images/mango.jpg', 'p1010'),
(12, ' Wonderland Grapes', '140', 1, 'images/grape.jpg', 'p1011'),
(13, 'Melon', '100', 1, 'images/melon.jpg', 'p1012'),
(14, 'Mangosteen', '100', 1, 'images/mangosteen.jpg', 'p1013'),
(15, 'The Killer Kiwi', '65', 1, 'images/Kiwi.jpg', 'p1014'),
(16, 'Strawberry', '100', 1, 'images/strawberry.jpg', 'p1015'),
(17, 'Mango', '290', 1, 'images/mango.jpg', 'p1016'),
(18, 'Orange', '150', 1, 'images/orange.jpg', 'p1017'),
(19, 'Peachy peach', '90', 1, 'images/peach.jpg', 'p1018'),
(20, 'Rambutan', '100', 1, 'images/rambutan.jpg', 'p1019'),


(21, 'The super Axe', '350', 1, 'images/axe.jpg', 'p1020'),
(22, ' Hedge shears', '240', 1, 'images/shears.jpg', 'p1021'),
(23, 'Gardening Fork', '100', 1, 'images/gardeningFork.jpg', 'p1022'),
(24, 'Sickle', '90', 1, 'images/sickle.jpg', 'p1023'),
(25, 'Pruning Saw', '85', 1, 'images/saw.jpg', 'p1024'),
(26, 'The Shovel', '130', 1, 'images/shovel.jpg', 'p1025'),
(27, 'Fertilizer', '190', 1, 'images/fertilizer.jpg', 'p1026');

--create table cart

CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1


--**test_db database**

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'Julia', '123', 'Julia'),
(2, 'john', 'abc', 'john'),
(3, 'safi', 'bye123', 'safi'),
(4, 'hannah', 'hey123', 'hannah'),
(5, 'Admin_login', 'Admin', 'Admin_login'),
(6, 'Aish', 'aish12', 'Aish'),
(7, 'rayan', 'rayan13', 'rayan'),
(8, 'mary', 'mary14', 'mary'),
(9, 'hasan', 'hasan14', 'hasan'),
(10, 'alden', 'alden14', 'Alden');



