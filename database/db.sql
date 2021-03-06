DROP DATABASE IF EXISTS vidhyalaya;
CREATE DATABASE vidhyalaya;

DROP TABLE IF EXISTS login;
CREATE TABLE login(
        id int(11) NOT NULL AUTO_INCREMENT,
        email varchar(25) NOT NULL,
        username varchar(255) COLLATE utf8_unicode_ci NOT NULL,
        password char(64) COLLATE utf8_unicode_ci NOT NULL,
        `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,

        PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;



CREATE TABLE article (
  
	id int(11) NOT NULL,
  
	article_title varchar(255) NOT NULL,
  
	article_content text NOT NULL,
  
	article_timestamp int(11) NOT NULL
) 
	ENGINE=InnoDB DEFAULT CHARSET=latin1;
