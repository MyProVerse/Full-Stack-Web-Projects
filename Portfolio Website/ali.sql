create database ali;
use ali;
CREATE TABLE projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  link VARCHAR(255) NOT NULL
);
INSERT INTO projects (title, description, link) VALUES ('DevConnector', 'A social network for developers to connect, share their projects, and find opportunities. Built with React, Node.js, and MongoDB.', 'https://example.com/devconnector');

INSERT INTO projects (title, description, link) VALUES ('ShopSmart', 'An e-commerce platform with a recommendation engine, enabling users to find products based on their preferences. Developed using Django and React.', 'https://example.com/shopsmart');

INSERT INTO projects (title, description, link) VALUES ('TaskTracker', 'A productivity tool for task management and scheduling with a dynamic calendar view. Implemented with Vue.js and Firebase.', 'https://example.com/tasktracker');

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
