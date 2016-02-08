ALTER TABLE `user` ENGINE=MyISAM;

ALTER TABLE `user`;
ADD FULLTEXT(`last_name`, `email`, `role`, `department`, `street_address_2`, `suburb`, `state`, `country`);
