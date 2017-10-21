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
	`description` text not null default '' COMMENT '栏目描述',
	`pid` int(11) unsigned not null default 0 COMMENT '栏目父id',
	`external` varchar(100) not null default '' COMMENT	'外部链接',
	`url` char(30) not null default '' COMMENT	'栏目url命名 拼音',
	`path` char(20) not null default '' COMMENT '栏目路径',
	`status` tinyint(1) unsigned not null default 1 COMMENT '栏目状态 1在前端显示 0不显示',
	`text` text not null default '' COMMENT '栏目内容',
	`sorting` smallint(4) unsigned NOT NULL DEFAULT 50 COMMENT '排序',
	`layer` tinyint(1) unsigned NOT NULL DEFAULT 0 COMMENT '标识栏目层级',
	`time` int(11) unsigned not null default 0 COMMENT '添加时间'
)engine=innodb default charset=utf8;