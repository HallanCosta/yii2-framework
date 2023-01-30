CREATE TABLE `user`
(
  id int auto_increment,
  username varchar(55) not null,
  password varchar(255) not null,
  auth_key varchar(255) not null,
  access_token varchar(255) not null,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

CREATE TABLE article
(
id int auto_increment,
title varchar(1024) not null,
slug varchaR(1024) not null,
body LONGTEXT not null,
created_at int,
updated_at int,
created_by int,
updated_by int,
PRIMARY KEY (id)
);

ALTER TABLE article
  add constraint article_user_created_by_fk
      foreign key (created_by) references user (id);