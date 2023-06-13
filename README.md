# php-vue-apl
PHP Vue MySQL Docker Application

This is a simple CRUD (Create, Read, Update, Delete) application built with PHP, Vue.js, MySQL, and Docker.

-- File Structure in file 1.txt

Backend
The backend-php directory contains the PHP backend for the application. It includes PHP files responsible for CRUD operations, database configuration, and API endpoints. The Dockerfile allows building a Docker image for the backend.

Frontend
The frontend-vue directory contains the Vue.js frontend for the application. It includes Vue.js components, assets, and the main configuration files. The Dockerfile enables building a Docker image for the frontend. 

Docker Compose
The docker-compose.yaml file defines the services and their configurations required to run the application. It includes services for the PHP backend, Vue.js frontend, and MySQL database.

Getting Started
To run the application locally using Docker, follow these steps:

1) Clone this repository to your local machine. git clone <repo link>
2) Install docker and docker compose 
3) Open a terminal and navigate to the project directory:
--- cd php-vue-mysql-docker-app ---
4) Run the following command to start the application: 
--- docker-compose up --build ---
5) Once the containers are up and running, run the script to modify the etc/hosts file:
For Ubuntu, run: --- sudo ./add_hosts_entries.sh ---
(If you are using a different operating system, please refer to the documentation on how to modify the hosts file for your specific OS.)

Access the application:
Frontend: Open a web browser and go to http://app.loc:8080
Backend: API endpoints are available at http://api.app.loc:8090

To stop the application, use Ctrl+C in the terminal, and run the following command to remove the containers:
--- docker-compose down ---


Thanks !!!