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

1. Pull the project from Github. 
2. Open MySQL Workbench 
    > Connect lo localhost 
    > Create database 'boxinator' and table 'boxes'. It should look like this:
    
    ```
    id              int PRIMARY KEY
    receiverName    varchar(255) NOT NULL
    weight          int NOT NULL
    colour          varchar(255) NOT NULL
    country         varchar(255)
    
   ```
   
