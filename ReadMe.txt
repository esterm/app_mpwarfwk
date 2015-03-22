  My framework in PHP

  What is it?
  -----------

  This is a micro project which works with a simple PHP framework. The
  main purpose of this application is to show the functionalities of the framework.
  This framework enables the developer to use a routing system, the template engines 
  Twig and Smarty, a request and response (HTTP and JSON) system and the Database (PDO), 
  and provides a dependency injection container.
  
  The Latest Version
  ------------------

  This is the first version of the project.

  Installation
  ------------

  Please, follow the next steps to install the application that uses this simple PHP framework.

  1. Install the repostory on your machine.

  2. Do a "composer update" to install the PHP framework and the other dependencies of this PHP application in the vendor folder.

  3. Navigate to the folder of the framework that contains the database.sql file. Using the next command:
  cd yourPath/framework/vendor/esterm/mpwarfwk/src/Mpwarfwk/Component/Database

  4. Execute the database.sql file with the mysql program connecting to the server as the MySQL root user.
  mysql -uroot -p < database.sql
  This file will create a user and password used by: Component/Database/SQL.php 
 

  5. Open your browser and write the url of the virtual host which points to "index_dev.php" of the application and follow the links to see all the functionalities of the framework.
  For example: framework.dev

  6. Navigate through the menu to see the functionalities of the framework.

  Documentation
  -------------

  This application shows:

  1. The routing system of the framework. The routes are composed by the virtualhost name which
  points to the index.php or index_dev.php files, then de controller name, and then the action name. 
  For example:
  http://framework.dev/home/secondary 
  In this case, the home class and the secondaryAction method of this class would be executed. If
  the url contains more data, it is considered extra parameters, for example:
  http://framework.dev/hello/main/ester/ana
  This would say hello to both names.

  2. The template engines Twig and Smarty are used.

  3. The controllers of the application receive a request from which the url, parameters and other data are get, 
  and give a response (HTTP or JSON).

  4. The database (PDO) is used by the application and the PHP framework provides a class to make its management easier.

  5. The framework provides a dependency container which is used to create the instances of the application.

  