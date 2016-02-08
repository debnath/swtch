ALTER TABLE `user` ENGINE=MyISAM;

ALTER TABLE `user`
ADD FULLTEXT(last_name, email, role, department, street_address_1, suburb, state, country);
