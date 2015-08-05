-- 数据库
	CREATE database IF NOT EXISTS `labms`;
	USE `labms`;
		
-- 用户表
	DROP TABLE IF EXISTS `users`;
	CREATE TABLE `users`(
	/* `id` tinyint unsigned AUTO_INCREMENT, */
	`number` int PRIMARY KEY,
	`name` varchar(20) NOT NULL,
	`username` varchar(20) NOT NULL UNIQUE,
	`password` char(32) NOT NULL,
	`role` tinyint unsigned,
	`email` varchar(50),
	`telephone` int 
	);

-- 公告表
	DROP TABLE IF EXISTS `article`;
	CREATE TABLE `article`(
	`aid` tinyint unsigned AUTO_INCREMENT PRIMARY KEY, 
	`title` varchar(50)  NOT NULL,
	`content` text,
	`publish_time` datetime,
	`publish_person` int,
	`important` (待定)
	);

	* lab
		* number   ？意义
		* name	
		* desc
		* capacity：容量，限制使用人数
		* admin : 管理员
		
-- 实验室表
	DROP TABLE IF EXISTS `lab`;
	CREATE TABLE `article`(
	
	);