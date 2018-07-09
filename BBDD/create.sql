CREATE TABLE `blog_post`(
    `post_id`            INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `post_title`         TEXT NOT NULL,
    `post_content`       LONGTEXT NOT NULL,
    `post_image`          VARCHAR(300) NOT NULL DEFAULT 'images/unknown.jpg',
    `post_created_by`    VARCHAR(128) NOT NULL DEFAULT 'Anonyous',
    `post_created_at`    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `post_modified_at`   TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`post_id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE utf8_bin;

INSERT INTO `blog_post`(
 `post_title`,
 `post_content`)
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