    START TRANSACTION;

    -- Drop everything
    DROP TABLE IF EXISTS `opendayregistration`;
    DROP TABLE IF EXISTS `user`;
    DROP TABLE IF EXISTS `role`;

    -- Table: role
    CREATE TABLE IF NOT EXISTS `role` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(100) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=0;
    INSERT INTO `role` (`name`) VALUES ('Administrator');
    INSERT INTO `role` (`name`) VALUES ('Docent');
    INSERT INTO `role` (`name`) VALUES ('Student');

    -- Table: user
    CREATE TABLE IF NOT EXISTS `user` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `firstname` varchar(128) NOT NULL,
        `lastname` varchar(128) NOT NULL,
        `email` varchar(128) NOT NULL,
        `password` varchar(128) NOT NULL,
        `phone` varchar(10) NOT NULL,
        `role` int NOT NULL,
        PRIMARY KEY (`id`)
        -- FOREIGN KEY (`role`) REFERENCES `role`(`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=0;
    -- INSERT INTO `user` (`firstname`, `lastname`, `email`, `password`, `phone`, `role`) VALUES ('Robijn', 'Noort', 'robijn@gmail.com', '1234', `0624541575` 0);

    -- Table: opendayregistration
    CREATE TABLE IF NOT EXISTS `opendayregistration` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `user` int NOT NULL,
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user`) REFERENCES `user`(`id`)
    ) ENGINE=InnoDB;

    -- Table: workshopregistration
    -- CREATE TABLE IF NOT EXISTS `workshopregistration` (
    --     `id` int(11) NOT NULL AUTO_INCREMENT,
    --     `user` int NOT NULL
    --     PRIMARY KEY (`id`),
    --     FOREIGN KEY (`user`) REFERENCES `user`(`id`)
    -- ) ENGINE=InnoDB AUTO_INCREMENT=0;

    -- Commit everything
    COMMIT;