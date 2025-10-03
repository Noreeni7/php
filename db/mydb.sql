-- CREATE TABLE users(
-- 	id INT(11) NOT NULL AUTO_INCREMENT,
--     username VARCHAR(30) NOT NULL,
--     pwd VARCHAR(255) NOT NULL,
--     email VARCHAR (100) NOT NULL,
--     created_at DATETIME NOT NULL DEFAULT CURRENT TIME,
--     PRIMARY KEY (id)
-- );

-- CREATE TABLE comments(
--     id INT(11) NOT NULL AUTO_INCREMENT,
--     username VARCHAR(30) NOT NULL,
--     comment_text TEXT NOT NULL,
--     created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
--     users_id INT(11),
--     PRIMARY KEY (id),
--     FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
-- );


-- Options:

-- ON DELETE CASCADE → if the user is deleted, delete all their posts too.

-- ON DELETE RESTRICT → do not allow deleting the user if they still have posts.

-- ON DELETE SET NULL → keep the post, but mark user_id as NULL.


-- INSERT INTO users (username, pwd, email) VALUES ('Fredrick', 'fred123', 'fred12@gmail.com');

-- UPDATE users SET username = 'Kip', pwd = 'kip' WHERE id = 2;

-- DELETE FROM users WHERE id = 1;

-- INSERT INTO comments (username, comment_text, users_id) VALUES ('Kip', 'This is a comment' , 2);

-- SELECT username, pwd FROM users WHERE id =2;

-- SELECT * FROM comments WHERE user_id =2;

-- SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id;

-- SELECT * FROM users LEFT JOIN comments ON users.id = comments.users_id;