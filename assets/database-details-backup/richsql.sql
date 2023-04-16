-- ddb nm->richpestdb

Create Table usertb
(
  id int Primary Key AUTO_INCREMENT,
  name Varchar(50),
  email Varchar(50),
  phoneno Varchar(50),
  address Varchar(200),
  username Varchar(50),
  password Varchar(50),
  created_at timestamp
)
Create table servicetb
(
 id int Primary Key AUTO_INCREMENT, 
 sname Varchar(50),
 catid int,
 -- type Varchar(50),
 image Varchar(5000),
 description Varchar(200),
 created_at timestamp
)
Create table servicecategorytb
(
	id int Primary Key AUTO_INCREMENT,
	catname Varchar(50),
	created_at timestamp
)

Create table servicepricetb
(
	id int Primary Key AUTO_INCREMENT,
	sid int,
	price Varchar(50),
	tymfrm Varchar(101),     //better tymfrm
	created_at timestamp
)

Create table carttb
(
	id int Primary Key AUTO_INCREMENT,
	username Varchar(50),
	sid int,
	tymfrm Varchar(101),
	housetype Varchar(51),
	price int,
	finalprice int,
	discount int,
	created_at timestamp
)

Create table ordertb
(
	id int Primary Key AUTO_INCREMENT,
	username Varchar(50),
	totalbill int,
	status Varchar(50),
	date date,
	time varchar(101),
	created_at timestamp
)
Create table orderdetails
(
	oid int ,
    -- sid int,
    sname Varchar(51),
    scost int,
    tymfrm Varchar(101),
	housetype Varchar(51),
	pestcontrolagent Varchar(50)

)
Create table pestcontrolagent
(
	id int Primary Key AUTO_INCREMENT,
	name Varchar(50),
	phoneno Varchar(50),
	email Varchar(50),
	areapincode Varchar(20),
	servicespecialist varchar(101),
	created_at timestamp
)

----done----
Create table pestcontrolagent
(
	id int Primary Key AUTO_INCREMENT,
	name Varchar(50),
	phoneno Varchar(50),
	email Varchar(50),
	areapincode Varchar(20),
	servicespecialist varchar(101),
	created_at timestamp
)



Create table servicetimeframetb
(
	id int Primary Key AUTO_INCREMENT,
	sid int,
	tymfrm Varchar(100),
	catid int,
	created_at timestamp
)
Create table areatb
(
	id int Primary Key AUTO_INCREMENT,
	type Varchar(50),
	catid int,
	sid int,
	created_at timestamp
)

-- carttb