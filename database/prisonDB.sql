CREATE DATABASE prison_system;

USE  prison_system;

CREATE TABLE admin_tbl
(
  Admin_Id varchar(12) NOT NULL ,
  Admin_Name varchar(50) NOT NULL,
  Gender varchar(20),
  Email varchar(100),
  Telephone varchar(15),
  Address varchar(50),
  Admin_Password varchar(30) NOT NULL,
  PRIMARY KEY (Admin_Id)
);


/*Admin Table*/
INSERT INTO admin_tbl
  (Admin_Id, Admin_Name,Gender,Email,Telephone,Address, Admin_Password)
VALUES
  (2, 'sueNimoh', 'Female', 'susan@yahoo.com', '0745678432', 'Ruai', 'sue1234');

SELECT * FROM admin_tbl;

/*Comments Table*/
CREATE TABLE announce
(
  Id varchar(16) NOT NULL PRIMARY KEY,
  Username varchar(50),
  to_ varchar(17) NOT NULL,
  subject varchar(14) NOT NULL,
  message varchar(100) NOT NULL
);



/*Table for Court Details*/
CREATE TABLE court
(
  id int(12) NOT NULL,
  File_number varchar(25) NOT NULL,
  Dateoftrial date NOT NULL,
  Sentence varchar(14) NOT NULL,
  Location varchar(15) NOT NULL,
  judge varchar(50) NOT NULL,
  PRIMARY KEY (File_number),
  FOREIGN KEY(id) REFERENCES registration
);



/*Table For Prisons*/
CREATE TABLE newprison
(
  pno int(25) NOT NULL
  AUTO_INCREMENT,
  pname varchar
  (100) NOT NULL,
  location varchar
  (30) NOT NULL,
  opendate varchar
  (30) NOT NULL,
  contact int
  (30) NOT NULL,
  capacity int
  (30) NOT NULL,
  PRIMARY KEY
  (pno)
);


  

  /*Table to capture officer details*/

  CREATE TABLE officerdetails
  (
    id varchar(16) NOT NULL,
    fullname varchar(30) NOT NULL,
    address varchar(30) NOT NULL,
    dateofbirth varchar(30) NOT NULL,
    gender varchar(30) NOT NULL,
    telephone int(30) NOT NULL,
    education varchar(30) NOT NULL,
    experience varchar(30) NOT NULL,
    PRIMARY KEY (id)
  );



  INSERT INTO officerdetails
    (id, fullname, address, dateofbirth, gender, telephone, education, experience)
  VALUES
    (33333333, 'Mbuvi', 'Embu', '1989-04-12', 'Female', 99666666, 'PDG', '1-6 months'),
    (44444444, 'Emmanuel', 'Langata', '2015-02-12', 'Male', 2147483647, 'Certificate', '1-2years'),
    (45555555, 'yamiv', 'rongai', '1977-02-12', '', 2147483647, 'Certificate', '5-7yrs');


  /*Table for police or officers*/
  CREATE TABLE police_tbl
  (
    id int(12) NOT  NULL,
    Prison_Name varchar(30) NOT NULL,
    Address varchar(100) NOT NULL,
    City varchar(100) NOT NULL,
    Email varchar(50) NOT NULL,
    Mobile int(36) NOT NULL,
    UserName varchar(30) NOT NULL,
    Password varchar(30) NOT NULL,
    PRIMARY KEY (Username),
    FOREIGN KEY (id) REFERENCES officerdetails
  );


  INSERT INTO police_tbl
    (Id, Prison_Name, Address, City, Email, Mobile, UserName, Password)
  VALUES
    (897, 'Langata', 'Langata', 'Nairobi', 'policepol@police.com', 888766, 'police', 'police');


  /*Table for Officer Transfer Details*/

  CREATE TABLE officer
  (
    National_id int(30) NOT NULL,
    Telephone int(25) NOT NULL,
    From_prison varchar(100) NOT NULL,
    To_prison varchar(100) NOT NULL,
    Dateoftransfer date NOT NULL,
    PRIMARY KEY (National_id)
  )
  ;
  



  /*Table for New Prisoners Registration*/
  CREATE TABLE registration
  (
    id int(12) NOT NULL,
    photo varchar(300),
    category varchar(50) NOT NULL,
    Full_Name varchar(100) NOT NULL,
    DOB varchar(30) NOT NULL,
    datein varchar(12) NOT NULL,
    dateout varchar(12) NOT NULL,
    Address varchar(20) NOT NULL,
    County varchar(20) NOT NULL,
    Gender varchar(20) NOT NULL,
    Education varchar(20) NOT NULL,
    Marital varchar(20) NOT NULL,
    Offence varchar(90) NOT NULL,
    Sentence varchar(13) NOT NULL,
    File_num varchar(12) NOT NULL ,
    prison varchar(100) NOT NULL,
    PRIMARY KEY (File_num)
  );
  

SELECT * FROM registration;



  CREATE TABLE inmates
  (
    AdmissionID varchar(30) PRIMARY KEY NOT NULL,
    CellBlock varchar(30) NOT NULL,
    Category varchar(30) NOT NULL,
    Medical varchar(200) NOT NULL,
    id int(12),
    FOREIGN KEY(id) REFERENCES registration
  );

  

  /*Table To track prisoners Transfer*/
  CREATE TABLE transfer
  (
    National_id int(16) NOT NULL,
    File_num varchar(16) NOT NULL,
    From_prison varchar(100) NOT NULL,
    To_prison varchar(100) NOT NULL,
    Dateoftransfer date NOT NULL

  );


  /*Table for the User*/
  CREATE TABLE user_tbl
  (
    User_Id int(16) NOT NULL
    AUTO_INCREMENT,
  Name varchar
    (50) NOT NULL,
  Address varchar
    (100) NOT NULL,
  City varchar
    (20) NOT NULL,
  Mobile int
    (11) NOT NULL,
  Email varchar
    (50) NOT NULL,
  Gender varchar
    (10) NOT NULL,
  BirthDate date NOT NULL,
  UserName varchar
    (50) NOT NULL,
  Password varchar
    (30) NOT NULL,
  Station_Name varchar
    (30) NOT NULL,
  VerificationProof varchar
    (200) NOT NULL,
  PRIMARY KEY
    (User_Id)
);


    INSERT INTO user_tbl
      (User_Id, Name, Address, City, Mobile, Email, Gender, BirthDate, UserName, Password, Station_Name, VerificationProof)
    VALUES
      (1, 'Susan Wairimu', 'Ruai', 'Nairobi', 0770291162, 'susanwairimu177@yahoo.com', 'Female', '1999-04-03', 'sueNimu', 'Nimu1234', 'Langata', 'User');



    /*Visitors Table*/
    CREATE TABLE visitor
    (
      id int(12) NOT NULL,
      fullname varchar(25) NOT NULL,
      address varchar(25) NOT NULL,
      dateofvisit varchar(25) NOT NULL,
      timein varchar(24) NOT NULL,
      timeout varchar(23) NOT NULL,
      relationship varchar(25) NOT NULL,
      telephone int(13) NOT NULL,
      prisoner varchar(25) NOT NULL,
      AdmissionID varchar(30),
      FOREIGN KEY (AdmissionID) REFERENCES inmates
    );



