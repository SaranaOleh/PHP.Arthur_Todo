CREATE TABLE `users`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `login` VARCHAR (60) NOT NULL UNIQUE ,
  `pass` VARCHAR (255) NOT NULL
);

CREATE TABLE `user_tokens`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `token` VARCHAR (255) NOT NULL UNIQUE ,
  `user_ip` VARCHAR (255) NOT NULL ,
  `user_agent` VARCHAR (255) NOT NULL ,
  `user_id` INT UNSIGNED NOT NULL ,
  `expires` BIGINT UNSIGNED NOT NULL ,
  `created` BIGINT UNSIGNED NOT NULL ,
  CONSTRAINT `user_token_fk_users` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT
);

CREATE INDEX `token_index` ON `user_tokens`(`token`);

CREATE TABLE `roles`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `name` VARCHAR (255) NOT NULL UNIQUE
);

CREATE TABLE `user_roles`(
  `user_id` INT UNSIGNED NOT NULL,
  `role_id` INT UNSIGNED NOT NULL,
   CONSTRAINT `user_roles_fk_users` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
   CONSTRAINT `user_roles_fk_roles` FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  PRIMARY KEY (`user_id`,`role_id`)
);

CREATE TABLE `notes`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `note` VARCHAR (255) NOT NULL,
  `author` INT UNSIGNED NOT NULL,
  CONSTRAINT `user_note_fk_users` FOREIGN KEY (`author`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT
);

INSERT INTO `notes`(`note`,`author`) VALUES ("pervaya zametka",2),("vtoraya zametka",2);