# mvc_crud
MVC CRUD (Simple Project) - PHP-based CRUD application showcasing MVC architecture. Includes basic CRUD operations for managing products. Ideal for learning MVC principles. Organized, modular code structure.

## Description
MVC CRUD (Simple Project)

This is a simple ```MVC-based CRUD``` (```Create```, ```Read```, ```Update```, ```Delete```) application built using PHP. It demonstrates the fundamental principles of the ```Model-View-Controller``` architectural pattern for web development. The project includes controllers for managing ```CRUD operations```, ```models``` for interacting with the ```database```, and ```views``` for rendering the user interface.

Features:
- ```Create```, ```read```, ```update```, and ```delete``` products.
- Basic user interface for managing products.
- ```MVC``` structure for organized and modular code.

This project serves as a learning resource for understanding ```MVC``` architecture for absolute beginners and implementing basic ```CRUD``` functionality in ```PHP``` applications.


## Installation
To run this project locally on your machine, follow these steps:

1. **Clone the Repository**:
   - ```git clone https://github.com/Adamo08/simple_crud_mvc.git```
2. **Navigate to the Project Directory**:
   - ```cd simple_crud_mvc```
3. **Update the Hosts File**:
   - The hosts file is used by your operating system to map hostnames to IP addresses.
   - Adding an entry to the hosts file is necessary to associate the custom domain `crud_mvc.local` with the loopback IP address `127.0.0.1`, allowing you to access your local server using this domain.
   - On Windows, the hosts file is located at `C:\Windows\System32\drivers\etc\hosts`.
   - On Unix-based systems (e.g., Linux, macOS), it's typically located at `/etc/hosts`.
   - Add the following line at the end of the hosts file, then save the changes:
     ```
     127.0.0.1   crud_mvc.local
     ```

4. **Configure the Virtual Host**:
   - A virtual host allows you to run multiple websites on the same server.
   - Setting up a virtual host in your Apache configuration is necessary to serve your project files from a custom domain (`crud_mvc.local`) instead of the default `localhost`.
   - Open your Apache configuration file (e.g., `httpd-vhosts.conf`), usually located in `C:\xampp\apache\conf\extra\`.
   - Add the following configuration to create a virtual host for your project:
     ```
     <VirtualHost *:80>
         DocumentRoot "C:/xampp/htdocs/MVC Examples/CRUD MVC/Public"
         ServerName crud_mvc.local
     </VirtualHost>
     ```
   - This configuration specifies that requests to `crud_mvc.local` should be served from the `Public` directory of your project.
   - After making changes to the Apache configuration, don't forget to restart Apache to apply the changes.


5. **Configure the Database**:
   - Create a new MySQL database.
   - Navigate to ```http://localhost/phpmyadmin/index.php```
   - Then click ```Add New Database``` or ```Nouvelle base de données``` on the left side
   - Then select ```import``` or ```importer``` , and navigate to ```simple_crud_mvc/App/Database``` and select ```products.sql```
   - Once the file is selected, scroll down and hit ```import``` 

6. **Update Database Configuration**:
   - Open the `App/Config/config.php` file.
   - Update the database configuration variables.
   - In the 13th line ```define("HOST", "localhost:4306")``` , change the host port to your own (by default, it's  ```3306```)

7. **You're ready to go!**: 
   - Congratulations! You have successfully set up the MVC CRUD application.
   - To access the application, open your web browser and type `crud_mvc.local` in the address bar.
   - You should now be able to view the application and perform CRUD operations on products.

8. **Note:**
   - **Database Interaction**: This project utilizes the [PHP MySQLi Database Class](https://github.com/ThingEngineer/PHP-MySQLi-Database-Class) for efficient database interactions. The class files are situated in the `App/Core/DB` directory within your project. Ensure that the class files are readily accessible to your project.
   - For further insights and understanding of its functionality, you can explore the repository to delve into its workings.



## Contributing
Contributions are welcome! If you find any issues or have suggestions for improvement, please open an issue or create a pull request.

