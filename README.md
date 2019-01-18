<h1 align="center">
  <br>
    <a href="https://github.com/rafathossain96/Connectiong-PHP-to-MySQL-Database"><img src="https://i.ibb.co/JpD1h9Q/connect-mysql-with-php-banner-1.jpg" alt="php-mysql" width="100%" border="0"></a>
  <br>
  Setup Instruction
  <br>
</h1>

<p align="center">
  <a href="https://github.com/rafathossain96/bracu-notice-crawler/releases">
    <img src="https://img.shields.io/github/release/rafathossain96/Connectiong-PHP-to-MySQL-Database.svg">
  </a>
  <a href="https://github.com/rafathossain96/bracu-notice-crawler/blob/master/LICENSE">
      <img src="https://img.shields.io/github/license/rafathossain96/Connectiong-PHP-to-MySQL-Database.svg">
  </a>
</p>

### MySQL Database Setup
First of all you need to create a MySQL Database from you cPanel. At the time of database creation you will be asked for <b>Database Name, Database Username, Database Password</b>. Please enter all these information carefully and save them to use later.

### Creating the Connection
To set up the connection between Database and the PHP file, you need to download <b>Database Configuration Package</b> and upload upload it to your cPanel File Manager. Now you need to edit some lines in <b>database_configuration.php</b> file. Open this file with any editor. You can also edit the file before uploading to cPanel.

Here are the changes that you need in the configuration file.
<br><br>
$server_address = "localhost";
<br>$database_name = "Your_Database_Name";
<br>$username = "Your_Databse_Username";
<br>$password = "Your_Database_Password";

Now save it and you are ready to go.

### Test the Connection
Now it's time to check if your connection is working fine.

By this time, you have already uploaded the Configuration package to your cPanel.

Go to the directory where you have uploaded the files.
<br>
Example: https://your-domain-name/path-to-folder/
<br>
In localhost: http://localhost/path-to-folder/

If you run this and if every procedure is correct then you will see a green signal.

<p align="center">
    <img src="https://i.ibb.co/d6jfj4C/screenshot-shoutlab-asia-2019-01-18-16-47-11.png" alt="demo" width="100%" border="0">
</p>

So you have successfully connected your PHP to MySql Database.

Now you can write your own SQL command and execute them. But don't forget to import the database configuration file on top on your PHP file.

This project uses php and MySQL and shows the way to connect PHP with MySQL Database.

### Contribution & License
You can contribute in following ways:

- Report bugs
- Develop
- Give suggestions to make it better
- Fix issues & submit a pull request
