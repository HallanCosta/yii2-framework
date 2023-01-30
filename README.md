# Yii2 Framework
<b>Learned on project</b>
- [x] Some functions helper from Yii2
- [x] Manipulate routes
- [x] CRUD article

# How to run project
#### Create Database
- Database name: <b>yii2crashcourse</b>
- Username: <b>root</b>
- Password:


#### Create table user
```
CREATE  TABLE  user
(
id int auto_increment,
username varchar(55) not null,
password  varchar(255) not null,
auth_key varchar(255) not null,
access_token varchar(255) not null,
PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
```

#### Create table article
```
CREATE  TABLE  article
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

#### Create FK on table article
```
ALTER  TABLE article
add  constraint article_user_created_by_fk
foreign key (created_by) references user (id);
```

## Composer
- Install dependences from composer

## Virutal host
Define folder <b>web </b> to run virtualhost <b>yii2.test</b>