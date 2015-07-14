CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
	username varchar(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
	verified BOOLEAN NOT NULL DEFAULT 0,
    created DATETIME,
    modified DATETIME,
	UNIQUE KEY (username)
);

CREATE TABLE feeds (
	id INT AUTO_INCREMENT PRIMARY KEY,
	sitename VARCHAR(255) NOT NULL,
	url TEXT NOT NULL,
	created DATETIME,
	modified DATETIME,
	UNIQUE KEY (sitename)
);

CREATE TABLE users_feeds (
	user_id INT NOT NULL,
	feed_id INT NOT NULL,
	PRIMARY KEY (user_id, feed_id),
	FOREIGN KEY user_key(user_id) REFERENCES users(id),
	FOREIGN KEY feed_key(feed_id) REFERENCES feeds(id)
);

CREATE TABLE users_favourites (
	id INT AUTO_INCREMENT PRIMARY KEY,
	user_id INT NOT NULL,
	feed_id INT NOT NULL,
	post_xml TEXT,
	FOREIGN KEY user_key(user_id) REFERENCES users(id),
	FOREIGN KEY feed_key(feed_id) REFERENCES feeds(id)
);

CREATE TABLE feed_requests (
	id INT AUTO_INCREMENT PRIMARY KEY,
	user_id INT NOT NULL,
	site_name VARCHAR (255) NOT NULL,
	url TEXT NOT NULL,
	FOREIGN KEY user_key(user_id) REFERENCES users(id)
);