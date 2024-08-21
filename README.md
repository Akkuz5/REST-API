# REST-API

Установка и настройка окружения
RESTful API на PHP, необходимо установить и настроить окружение. Для этого потребуется веб-сервер (например, Apache или Nginx), PHP и база данных (например, MySQL). 

Установка Apache и PHP
Для установки Apache и PHP на Ubuntu выполните следующие команды (для установки на Windows https://lumpics.ru/how-to-install-apache-in-windows, Mac Os https://metanit.com/php/tutorial/1.5.php):

Bash
Скопировать код
sudo apt update
sudo apt install apache2
sudo apt install php libapache2-mod-php php-mysql
Эти команды обновят список пакетов, установят веб-сервер Apache и PHP вместе с необходимыми модулями для работы с MySQL. После установки убедитесь, что Apache и PHP работают корректно, запустив веб-сервер и проверив его работу через браузер.

Установка MySQL
Для установки MySQL выполните команду:

Bash
Скопировать код
sudo apt install mysql-server
После установки MySQL, настройте базу данных и создайте пользователя:

SQL
Скопировать код
CREATE DATABASE myapi;
CREATE USER 'apiuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON myapi.* TO 'apiuser'@'localhost';
FLUSH PRIVILEGES;
Эти команды создадут новую базу данных myapi, пользователя apiuser с паролем password и предоставят ему все необходимые привилегии для работы с базой данных. Настройка базы данных является критически важным этапом, так как от этого зависит безопасность и целостность данных.

Теперь, когда окружение настроено, можно  начать работать с файлом index.php в корне вашего проекта. Этот код обрабатывает различные HTTP методы и возвращает соответствующие сообщения в формате JSON. Для взаимодействия с базой данных в нашем RESTful API, файл Database.php. Этот класс устанавливает соединение с базой данных и возвращает объект PDO для выполнения запросов. Файл User.php для работы с данными пользователей, CRUD операции. Этот класс реализует методы для чтения, создания, обновления и удаления данных пользователей. Каждый метод использует подготовленные выражения для предотвращения SQL-инъекций, что является важным аспектом безопасности.Вы можете тестировать его с помощью инструментов, таких как Postman или curl.

*****
English language version readme

Installing and configuring the environment
RESTful API in PHP, you need to install and configure the environment. This will require a web server (for example, Apache or Nginx), PHP and a database (for example, MySQL). 

Installing Apache and PHP
To install Apache and PHP on Ubuntu, run the following commands (for installation on Windows https://lumpics.ru/how-to-install-apache-in-windows , Mac Os https://metanit.com/php/tutorial/1.5.php ):

Bash
Copy the code
sudo apt update
sudo apt install apache2
sudo apt install php libapache2-mod-php php-mysql
These commands will update the package list, install the Apache and PHP web server along with the necessary modules for working with MySQL. After installation, make sure that Apache and PHP are working correctly by starting the web server and checking its operation through the browser.

Installing MySQL
To install MySQL, run the command:

Bash
Copy
the sudo apt install mysql server code
After installing MySQL, configure the database and create a user:

SQL
Copy the code
CREATE DATABASE myapi;
CREATE
