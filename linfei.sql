create database if not exists `linfeicn` default charset utf8 collate utf8_general_ci;

/*--------------
-- 管理员
---------------*/
create table if not exists `linfei_admin`(
`admin_id` int(11) unsigned not null auto_increment primary key,
`admin_name` char(10) not null default '' comment '用户名',
`admin_passwd` varchar(255) not null default '' comment '密码', 
`admin_secret` varchar(255) not null default '' comment '用于加密',
`admin_time` int(11) unsigned not null default 0 comment '添加时间'
)engine=innodb default charset=utf8 comment '管理员';


--栏目表
create table if not exists `linfei_classification`(
	`id` int unsigned not null auto_increment primary key COMMENT '栏目id',
	`name` char(30) not null default '' COMMENT'栏目名称',
	`title` varchar(255) not null default '' COMMENT '栏目title',
	`keywords` varchar(255) not null default '' COMMENT '关键字',
	`description` varchar(500) not null default '' COMMENT '栏目描述',
	`pid` int(11) unsigned not null default 0 COMMENT '栏目父id',
	`external` varchar(100) not null default '' COMMENT	'外部链接',
	`url` char(30) not null default '' COMMENT	'栏目url命名 拼音',
	`path` char(20) not null default '' COMMENT '栏目路径',
	`status` tinyint(1) unsigned not null default 1 COMMENT '栏目状态 1在前端显示 0不显示',
	`text` text  COMMENT '栏目内容',
	`sorting` smallint(4) unsigned NOT NULL DEFAULT 50 COMMENT '排序',
	`layer` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '标识栏目层级',
	`time` datetime not null default CURRENT_TIMESTAMP COMMENT '添加时间',
	`uptime` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)engine=innodb default charset=utf8;

--文章
 create table if not exists `linfei_article`(
   `id` int unsigned not null auto_increment primary key COMMENT '文章id',
   `name` varchar(255) not null default '' COMMENT '文章名称',
   `title` varchar(255) not null default ''  COMMENT '文章标题',
   `keywords` varchar(255) not null default '' COMMENT '关键字',
   `description` varchar(500) not null default '' COMMENT '文章描述',
   `cid` int(11) unsigned not null COMMENT '所属栏目',
   `img` varchar(500) not null default '' COMMENT '文章缩略图',
   `clicks` int unsigned not null default 0 COMMENT '点击数',
   `status` tinyint(1) not null default 0 COMMENT '文章状态 0在前端显示 1不显示',
   `body` text  COMMENT '文章内容',
   `recommended` tinyint(1) default 0 COMMENT '推荐  0未推荐 1推荐',
   `recommendeds` tinyint(1) default 0 COMMENT '特荐  0未推荐 1推荐',
   `headlines` tinyint(1) default 0 COMMENT '头条  0未推荐 1推荐',
   `external` varchar(255) not null default '' COMMENT '外部链接',
   `url` char(20) not null default '' COMMENT '自定义名称',
   `sorting` smallint(4) not null default 0 COMMENT '排序',
   `uptime`TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   `time` datetime not null default CURRENT_TIMESTAMP COMMENT '添加时间'
   )engine=innodb default charset=utf8;


 create table if not exists `yd_isseo`(
   `id` int unsigned not null auto_increment primary key COMMENT '文章id',
   `ip` char(20) not null default '' COMMENT '来路ip',
   `url` text COMMENT '来路url',
   `time` int unsigned not null default 0
)engine=innodb default charset=utf8;
