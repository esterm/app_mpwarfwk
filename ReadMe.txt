1. Go to the database.sql file directory (in the framework folder)
cd yourPath/framework/vendor/esterm/mpwarfwk/src/Mpwarfwk/Component/Database

2. Execute the database.sql file with the mysql program connecting to the server as the MySQL root user.
This file will create a user and password used by: Component/Database/SQL.php
mysql -uroot -p < database.sql

3. Open your browser and write the url of the virtual host which points to "index_dev.php" of the framework and follow the links.
framework.dev

4. Navigate through the menu to see the functionalities of the framework.