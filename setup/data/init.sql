USE blogs;

CREATE TABLE authors (
    email VARCHAR(128) NOT NULL PRIMARY KEY,
    pass_hash varchar(255) NOT NULL, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
    biography TEXT NOT NULL,
	created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO authors (email, pass_hash, firstname, lastname, biography) VALUES ("A00205715@cambriancollege.ca", "jazz123", "Jasmeet", "Singh", "Student at Cambrian College.");

CREATE TABLE posts (
    slug VARCHAR(128) NOT NULL PRIMARY KEY
    , title VARCHAR(255) NOT NULL
    ,content TEXT
    ,author VARCHAR(128) NOT NULL
    ,post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ,INDEX (author)
    ,FOREIGN KEY(author)
    , REFERENCES authors(email)
);

INSERT INTO `posts` (slug,title,content,author)
VALUES("post-a","Post A", "<article><h2>Post A</h2><section><p>This is a basic test article for the blog post.</p></section></article>","A00205715@cambriancollege.ca");
