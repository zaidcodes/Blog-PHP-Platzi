CREATE TABLE `blog_post`(
    `id`            INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `title`         TEXT NOT NULL,
    `content`       LONGTEXT NOT NULL,
    `image_url`     VARCHAR(300) NOT NULL DEFAULT 'http://localhost/blog/public/images/unknown.jpg',
    `created_by`    VARCHAR(128) NOT NULL DEFAULT 'Anonyous',
    `created_at`    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at`    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active`        TINYINT(1) NOT NULL DEFAULT '1', 
    PRIMARY KEY (`id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE utf8_bin;

CREATE TABLE `user`(
    `id`            INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name`          VARCHAR(32) NOT NULL,
    `lastname`      VARCHAR(32) NOT NULL,
    `nickname`      VARCHAR(32) NOT NULL,
    `password`      VARCHAR(128) NOT NULL DEFAULT '$2y$10$7ctSuHFTSv.lZg4t0BZhiO7Qe32Cm/afjePk.blZosPm1HWS42cbG', /*123456*/
    `email`         VARCHAR(128) NOT NULL,
    `created_at`    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at`    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `active`        TINYINT(1) NOT NULL DEFAULT 1, 
    PRIMARY KEY (`id`),
    UNIQUE KEY `user_email` (`email`),
    UNIQUE KEY `user_nickname` (`nickname`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE utf8_bin;

INSERT INTO `user`(
 `name`,
 `lastname`,
 `nickname`,
 `email`)
VALUES
('Name1','Lastname1','Nickname1','email1@email.com'),
('Name2','Lastname2','Nickname2','email2@email.com'),
('Name3','Lastname3','Nickname3','email3@email.com'),
('Name4','Lastname4','Nickname4','email4@email.com'),
('Name5','Lastname5','Nickname5','email5@email.com');

INSERT INTO `blog_post`(
 `title`,
 `content`)
VALUES
('title 1', '--1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 2', '--2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 3', '--3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 4', '--4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 5', '--5 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 6', '--6 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 7', '--7 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 8', '--8 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 9', '--9 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 10', '--10 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 11', '--11 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 12', '--12 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 13', '--13 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('title 14', '--14 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?');