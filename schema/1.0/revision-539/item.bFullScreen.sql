ALTER TABLE `items` ADD `sFullScreen` ENUM('forceYes','forceNo','default','') NOT NULL DEFAULT 'default' AFTER `bUsesAPI`;
ALTER TABLE `history_items` ADD `sFullScreen` ENUM('forceYes','forceNo','default','') NOT NULL DEFAULT 'default' AFTER `bUsesAPI`;