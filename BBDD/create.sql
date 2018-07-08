CREATE TABLE `blog_post`(
    `post_id`            INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `post_title`         TEXT NOT NULL,
    `post_content`       LONGTEXT NOT NULL,
    `post_image`          VARCHAR(300) NOT NULL DEFAULT 'images/unknown.jpg',
    `post_created_by`    VARCHAR(128) NOT NULL DEFAULT 'Anónimo',
    `post_created_at`    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `post_modified_at`   TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`post_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `blog_post`(
 `post_title`,
 `post_content`)
VALUES
('titulo 1', '--1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?'),
('titulo 2', '--2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perferendis, nobis corporis quod magni modi tempore beatae necessitatibus ea! In, laudantium commodi voluptates minima beatae officiis officia ut eaque unde?');