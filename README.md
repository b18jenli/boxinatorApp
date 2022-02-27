# BoxinatorApp
Boxinator is a single page application for calculating the shipping cost for boxes to specific locations around the world. The page contains two views, one with a form to add boxes to database and one with a table that display boxes stored in database.

The project is located in the folder /boxinatorapp and contains the following files:

- addbox.php
- add_data.php
- dbconfig.php
- display_data.php
- functions.js
- styling.css


## Technologies

The following technologies can be used to replicate this project: 

- MySQL (database)
- PHP & ajax (for client side interactions with database)
- JavaScript/jQuery 
- HTML
- CSS (Bootstrap framework)

## Tools used

- Text editor of choice (I used Atom)
- MySQL Workbench (to build database)

## Getting started

1. Pull the project from Github and put it in your computers localhost directory (ususally htdocs or user > sites on MacOS)
2. Open MySQL Workbench 
    > Connect lo localhost 
    > Create database 'boxinator' and Remember 'hostname', 'username' and 'password' to your localhost.  
    > Create table 'boxes'. It should look like this:
    
    ```
    id              int PRIMARY KEY
    receiverName    varchar(255) NOT NULL
    weight          int NOT NULL
    colour          varchar(255) NOT NULL
    country         varchar(255)
    
   ```
3. OPen file 'dbcoonfig.php' and edit/enter the 'hostname', 'username' and 'password' to your localhost. 
4. Open browser and enter 'localhost/addbox.php' in the adress field. You should now se this view:

<img width="1429" alt="Skärmavbild 2022-02-28 kl  00 28 51" src="https://user-images.githubusercontent.com/49142647/155904601-e5ffd64e-c783-4b81-80e9-72f06c698018.png">

5. Fill out form then click 'submit'. For box to be saved you have to fill all the fields and pass extra validation:
    > Name must be letters only
    > Weight can't be a negative number 
    
6. When a box is succesfully saved, an alert is executed and the page is reloaded. 
7. Right now there is no auto redirection to the view 'Listboxes'. To be able to see the newly stored box, click button 'see table' above form or 'Listboxes' in the navbar. You should then see this view: 

<img width="1426" alt="Skärmavbild 2022-02-28 kl  00 29 19" src="https://user-images.githubusercontent.com/49142647/155904856-3dba8bc4-f0ad-4cc4-88b6-776f2cf72357.png">

8. The table shows 'receiver', 'weight', 'colour' and 'shipping cost' for all the boxes inserted. The colour picked in the form is also displayed. 
9. There is currently no way to alter or delete boxes from the table/database but you can add as many as you like. 

