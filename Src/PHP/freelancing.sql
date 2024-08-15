
CREATE DATABASE IF NOT EXISTS FreelancePlatform;
USE FreelancePlatform;

CREATE TABLE Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    user_type ENUM('freelancer', 'client') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO Users (username, email, password, user_type) VALUES 
('johnDoe', 'john@example.com', 'hashed_password1', 'freelancer'),
('janeSmith', 'jane@example.com', 'hashed_password2', 'client'),
('bobBrown', 'bob@example.com', 'hashed_password3', 'freelancer'),
('aliceGreen', 'alice@example.com', 'hashed_password4', 'client'),
('mikeStone', 'mike@example.com', 'hashed_password5', 'freelancer'),
('carolBlue', 'carol@example.com', 'hashed_password6', 'client'),
('davidRed', 'david@example.com', 'hashed_password7', 'freelancer'),
('sarahYellow', 'sarah@example.com', 'hashed_password8', 'client'),
('philBlack', 'phil@example.com', 'hashed_password9', 'freelancer'),
('oliviaWhite', 'olivia@example.com', 'hashed_password10', 'client');


CREATE TABLE Profiles (
    profile_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    biography TEXT,
    skills TEXT,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);


INSERT INTO Profiles (user_id, biography, skills) VALUES 
(1, 'Experienced web developer.', 'HTML, CSS, JavaScript'),
(3, 'Graphic designer with 5 years of experience.', 'Photoshop, Illustrator'),
(5, 'Freelance writer and content creator.', 'Writing, SEO, Content Management'),
(7, 'Professional photographer.', 'Photography, Editing'),
(9, 'Certified Project Manager.', 'Leadership, Agile, Scrum'),
(11, 'java developer.', 'java, php, bootstrab'),
(31, 'AI developer', 'python, google colab'),
(51, 'Freelance problem solver.', 'C++, java'),
(71, 'Professional manager.', 'leading, finance'),
(91, 'Certified instructor.', 'UI/UX, java, python');

CREATE TABLE Jobs (
    job_id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    status ENUM('open', 'closed', 'in progress') NOT NULL DEFAULT 'open',
    posted_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (client_id) REFERENCES Users(user_id)
);


INSERT INTO Jobs (client_id, title, description, status) VALUES 
(2, 'Website Design', 'Need a professional looking website for our boutique.', 'open'),
(4, 'Logo Creation', 'Looking for a fresh logo for our startup.', 'open'),
(6, 'Market Research', 'Market research on consumer electronics.', 'closed'),
(8, 'Article Writing', 'Need articles on health and wellness topics.', 'in progress'),
(10, 'Mobile App Development', 'Develop a cross-platform mobile application.', 'open'),
(21, 'transelation', 'Need a professional translator', 'open'),
(41, 'marketing', 'Looking for one can do marketing campign', 'open'),
(61, 'managemnt', 'need manager for our project', 'closed'),
(81, 'finace', 'Need a finance employee for our company', 'in progress'),
(101, 'website develop', 'need web designer.', 'open');


CREATE TABLE Applications (
    application_id INT AUTO_INCREMENT PRIMARY KEY,
    job_id INT NOT NULL,
    freelancer_id INT NOT NULL,
    apply_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('accepted', 'rejected', 'pending') NOT NULL DEFAULT 'pending',
    FOREIGN KEY (job_id) REFERENCES Jobs(job_id),
    FOREIGN KEY (freelancer_id) REFERENCES Users(user_id)
);


INSERT INTO Applications (job_id, freelancer_id, status) VALUES 
(1, 1, 'accepted'),
(2, 3, 'pending'),
(3, 5, 'rejected'),
(4, 7, 'accepted'),
(5, 9, 'pending'),
(6, 11, 'accepted'),
(7, 31, 'pending'),
(8, 51, 'rejected'),
(9, 71, 'accepted'),
(10, 91, 'pending');


CREATE TABLE Messages (
    message_id INT AUTO_INCREMENT PRIMARY KEY,
    sender_id INT NOT NULL,
    receiver_id INT NOT NULL,
    message TEXT NOT NULL,
    sent_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (sender_id) REFERENCES Users(user_id),
    FOREIGN KEY (receiver_id) REFERENCES Users(user_id)
);


INSERT INTO Messages (sender_id, receiver_id, message) VALUES 
(1, 2, 'I am interested in your website design job.'),
(2, 1, 'Can you send me your portfolio?'),
(3, 4, 'I have experience in logo creation and would love to help.'),
(4, 3, 'Please submit your draft by next Monday.'),
(5, 6, 'Can we discuss the project details over a call tomorrow?'),
(6, 7, 'Please send to me my draft.'),
(7, 8, 'i need your help please'),
(8, 9, 'Please send to me my draft.'),
(9, 10, 'i need your help please'),
(10, 11, 'i need your help please');


SET FOREIGN_KEY_CHECKS = 1;
