# AWS EC2 + RDS Visitor Web Application

## Project Overview

This project demonstrates how to deploy a simple PHP web application on Amazon EC2 and connect it to an Amazon RDS MySQL database.

Users can submit their names and messages through a web form, and the data is stored in a MySQL database hosted on Amazon RDS.

---

## Architecture

User Browser
↓
Amazon EC2 (Apache + PHP)
↓
Amazon RDS (MySQL)

---

## Technologies Used

- Amazon EC2
- Amazon RDS
- Apache Web Server
- PHP
- MySQL
- Linux (Amazon Linux 2023)

---

## Features

- Web-based visitor message form
- Database connectivity using PHP mysqli
- Stores visitor messages in Amazon RDS
- Hosted on Amazon EC2

---

## Project Screenshots

### Visitor Application

![Visitor App](screenshots/visitor-app-home.png)

### Successful Submission

![Successful Submission](screenshots/successful-submission.png)

---

## Lessons Learned

During this project I learned:

- EC2 instance deployment
- RDS database creation and configuration
- Security group configuration
- PHP and Apache troubleshooting
- Database connectivity testing
- Hosting a dynamic web application in AWS

---

## Author

Ntando Entle
AWS Cloud Portfolio Project