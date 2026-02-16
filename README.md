# 🛍️ Bangu Shopping CTF

Welcome to **Bangu Shopping CTF**, a web application security challenge focused on classic PHP vulnerabilities. This project simulates the internal system of a real shopping mall (with a touch of humor) where you must explore flaws to obtain the flags.

## 📝 Description

The system includes the following features:
- **Home Page**: Listing of events and movies currently showing.
- **Search**: Event search functionality.
- **Newsletter**: Subscription system for news.
- **Login**: Restricted area for users and administrators.
- **Dashboard**: Administrative panel for user management and metric visualization.

## 🚀 Technologies Used

- **Front-end**: HTML5, CSS3 (Vanilla) with "Bangu-style" design.
- **Back-end**: PHP 8.2.
- **Database**: PostgreSQL 18.
- **Containerization**: Docker and Docker Compose.

## 🛠️ How to run the project

To run the challenge on your machine, you will need to have **Docker** and **Docker Compose** installed.

1.  **Clone the repository** (or download the files):
    ```bash
    git clone 
    cd bangushoppingctf
    ```

2.  **Start the containers**:
    ```bash
    docker-compose up -d --build
    ```

3.  **Access the application**:
    Open your browser and go to: `http://localhost:8080`

## 📂 Project Structure

- `app/public/`: Contains the PHP files accessible by the web server (`index.php`, `login.php`, `dashboard.php`).
- `app/src/`: Back-end logic, database connection, and session verification.
- `db/`: SQL script for initializing the PostgreSQL database.
- `docker-compose.yml`: Orchestration of application and database services.


*This project was created for educational purposes and CTF training.*
