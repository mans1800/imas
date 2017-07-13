#
# TABLE STRUCTURE FOR: admin_groups
#

DROP TABLE IF EXISTS `admin_groups`;

CREATE TABLE `admin_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `admin_groups` (`id`, `name`, `description`) VALUES ('1', 'webmaster', 'Webmaster');
INSERT INTO `admin_groups` (`id`, `name`, `description`) VALUES ('2', 'admin', 'Admin');
INSERT INTO `admin_groups` (`id`, `name`, `description`) VALUES ('4', 'manager', 'Manager');


#
# TABLE STRUCTURE FOR: admin_login_attempts
#

DROP TABLE IF EXISTS `admin_login_attempts`;

CREATE TABLE `admin_login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: admin_users
#

DROP TABLE IF EXISTS `admin_users`;

CREATE TABLE `admin_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `admin_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`) VALUES ('1', '127.0.0.1', 'webmaster', '$2y$08$snQHkzNhlWvAL8hMTOCRkOQFxWA6xA0FrgHyaOLjtkivMyYgX24Iy', NULL, NULL, NULL, NULL, NULL, NULL, '1451900190', '1494638307', '1', 'Webmaster', NULL);
INSERT INTO `admin_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`) VALUES ('2', '127.0.0.1', 'admin', '$2y$08$LECHtzobatfX7/my9uDes.JfZlEbJihbs7XOVFw2vMp2oaXM554/y', NULL, NULL, NULL, NULL, NULL, NULL, '1451900228', '1493107675', '1', 'Admin', NULL);


#
# TABLE STRUCTURE FOR: admin_users_groups
#

DROP TABLE IF EXISTS `admin_users_groups`;

CREATE TABLE `admin_users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `admin_users_groups` (`id`, `user_id`, `group_id`) VALUES ('1', '1', '1');
INSERT INTO `admin_users_groups` (`id`, `user_id`, `group_id`) VALUES ('2', '2', '2');


#
# TABLE STRUCTURE FOR: ci_sessions
#

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('o7d885hjc446ohfpdvagljhf2hpa4486', '::1', '1494517893', '__ci_last_regenerate|i:1494517593;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2v059i8f70aqhsdsboetjv0h2qfs5t6k', '::1', '1494518088', '__ci_last_regenerate|i:1494517897;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('g2nipjpmu9lis0n6jcdm1gg0vocr0kjn', '::1', '1494518494', '__ci_last_regenerate|i:1494518231;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ej7eu9f7qapq1v4s24ra4msiqqegaup5', '::1', '1494518894', '__ci_last_regenerate|i:1494518630;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5oc0e0ln0skk0tttvo9kgl9b8jq6sncr', '::1', '1494519202', '__ci_last_regenerate|i:1494518972;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2e4r6ditpbi99pcmu4vuskemieft5j6p', '::1', '1494519676', '__ci_last_regenerate|i:1494519411;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('i65493p62ql4lqli28dv89m9dsqmf0ti', '::1', '1494519949', '__ci_last_regenerate|i:1494519712;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vdsdpokk86l8iheq352o6jf86trnu2h0', '::1', '1494519939', '__ci_last_regenerate|i:1494519939;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ok07i1fem431svk853fup34akvtpvngs', '::1', '1494519949', '__ci_last_regenerate|i:1494519939;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('t81pnth230lgq7a6q4at761mlcblhcjt', '::1', '1494524562', '__ci_last_regenerate|i:1494524267;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('rmlj8r1dn42stfi4l2ssdsogtufk8v4g', '::1', '1494524267', '__ci_last_regenerate|i:1494524267;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('756ck9mgjjhl92qis881vkbop9dllmoh', '::1', '1494524277', '__ci_last_regenerate|i:1494524267;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c95p21stho1vnbho5nkes3gc66400boj', '::1', '1494524845', '__ci_last_regenerate|i:1494524574;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('919e3uuqsfs47j2d1v6odc5fej3movj5', '::1', '1494525124', '__ci_last_regenerate|i:1494524879;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bt0fn52278j7jgh5idpkphvifnh0rses', '::1', '1494525685', '__ci_last_regenerate|i:1494525403;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('m27e070ve7kpc2b42o49klves91r8sda', '::1', '1494526015', '__ci_last_regenerate|i:1494525730;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('at8paq3u3k8m27k426sh541v7i40i7r8', '::1', '1494526317', '__ci_last_regenerate|i:1494526038;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ppar1k7p17rff7gg9b9i4671lmeiaiba', '::1', '1494526512', '__ci_last_regenerate|i:1494526348;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494514534\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('g4t2umo1s1rf39mfg0l0915srncrubb0', '::1', '1494553655', '__ci_last_regenerate|i:1494553380;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494515749\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('n8jr4eljm8543qrqk7vm7bi6kq8ftcc6', '::1', '1494554047', '__ci_last_regenerate|i:1494553789;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494515749\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('kspdrdflm95fc41ep4tilais4f62k7p4', '::1', '1494554386', '__ci_last_regenerate|i:1494554112;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494515749\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ovv000abutrfccalqhl34fsierq20als', '::1', '1494554711', '__ci_last_regenerate|i:1494554416;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494515749\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('pd32678cuk7rvtjil72291qc210kuimq', '::1', '1494554937', '__ci_last_regenerate|i:1494554717;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494515749\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('458dussc9cbk5geh7er63lqp31q9j7ld', '::1', '1494556050', '__ci_last_regenerate|i:1494555986;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494515749\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('gj0mule3se4m44s2h7d5j9tnn0jp52kh', '::1', '1494559134', '__ci_last_regenerate|i:1494558925;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494515749\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('nc9a5vsv2ntfsagd26ssurpfdaepvuq9', '::1', '1494559025', '__ci_last_regenerate|i:1494559021;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dnits4l082v4t2cl0m1unc3rkc3shauo', '::1', '1494638338', '__ci_last_regenerate|i:1494638305;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494553381\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('r4tall74cj8hbhpd2h7krrri3qudmbq1', '::1', '1494639187', '__ci_last_regenerate|i:1494639101;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494553381\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bsgageht603acvs4s6u28hj2u4v3mqc2', '::1', '1494640041', '__ci_last_regenerate|i:1494639763;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494553381\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('riqr995dv44co87rmptobgoo65lajo0s', '::1', '1494640487', '__ci_last_regenerate|i:1494640189;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494553381\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5ko5h2cvs6l8bgfbe85u0i8fqn6njpi9', '::1', '1494640575', '__ci_last_regenerate|i:1494640496;identity|s:9:\"webmaster\";username|s:9:\"webmaster\";email|N;user_id|s:1:\"1\";old_last_login|s:10:\"1494553381\";');


#
# TABLE STRUCTURE FOR: groups
#

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `groups` (`id`, `name`, `description`) VALUES ('1', 'members', 'General User');


#
# TABLE STRUCTURE FOR: login_attempts
#

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: tb_daily
#

DROP TABLE IF EXISTS `tb_daily`;

CREATE TABLE `tb_daily` (
  `daily_id` int(11) NOT NULL AUTO_INCREMENT,
  `daily_date` date NOT NULL,
  `daily_list` text NOT NULL,
  `daily_no` varchar(10) NOT NULL,
  `daily_debit` double DEFAULT NULL,
  `daily_credit` double DEFAULT NULL,
  `daily_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `daily_save` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`daily_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO `tb_daily` (`daily_id`, `daily_date`, `daily_list`, `daily_no`, `daily_debit`, `daily_credit`, `daily_update`, `daily_save`) VALUES ('1', '2016-01-05', 'ธนาคาร\r\n<div style=\"margin-left: 40px;\">เงินรับมัดจำ</div>\r\nบันทึกรับเงินมัดจำ บจ.ตงเฉิน', '1/1', '406601', '406601', '2017-05-11 09:12:15', NULL);
INSERT INTO `tb_daily` (`daily_id`, `daily_date`, `daily_list`, `daily_no`, `daily_debit`, `daily_credit`, `daily_update`, `daily_save`) VALUES ('2', '2016-01-13', 'ธนาคาร\r\n<div style=\"margin-left: 40px;\">เงินรับมัดจำ</div>\r\n\r\n<div>บันทึกรับเงินมัดจำจากยา IMI</div>\r\n', '2/1', '1279447', '1279447', '2017-05-11 09:12:08', NULL);
INSERT INTO `tb_daily` (`daily_id`, `daily_date`, `daily_list`, `daily_no`, `daily_debit`, `daily_credit`, `daily_update`, `daily_save`) VALUES ('3', '2016-01-18', 'ธนาคาร\r\n<div style=\"margin-left: 40px;\">เงินรับมัดจำ</div>\r\nบันทึกรับเงินมัดจำ บจ.เคซี', '3/1', '65000', '65000', '2017-05-11 12:14:36', NULL);
INSERT INTO `tb_daily` (`daily_id`, `daily_date`, `daily_list`, `daily_no`, `daily_debit`, `daily_credit`, `daily_update`, `daily_save`) VALUES ('4', '2016-01-22', 'ธนาคาร\r\n<div style=\"margin-left: 40px;\">เงินรับมัดจำ</div>\r\nบันทึกรับเงินมัดจำ บจ.อินเตอร์', '4/1', '1261462', '1261462', '2017-05-11 12:14:40', NULL);
INSERT INTO `tb_daily` (`daily_id`, `daily_date`, `daily_list`, `daily_no`, `daily_debit`, `daily_credit`, `daily_update`, `daily_save`) VALUES ('7', '2016-01-25', 'ธนาคาร\r\n<div style=\"margin-left: 40px;\">เงินรับมัดจำ</div>\r\nบันทึกรับเงินมัดจำจาก บจ. อินเตอร์ 1000 CI&nbsp;2161108.0', '5/1', '1261462', '1261462', '2017-05-11 12:23:04', NULL);
INSERT INTO `tb_daily` (`daily_id`, `daily_date`, `daily_list`, `daily_no`, `daily_debit`, `daily_credit`, `daily_update`, `daily_save`) VALUES ('8', '2016-01-25', 'ธนาคาร\r\n<div style=\"margin-left: 40px;\">เงินรับมัดจำ</div>\r\nบันทึกรับเงินมัดจำ จาก บจ.ตงเฉิน 2016007', '', '177357', '177357', '2017-05-11 12:17:45', NULL);
INSERT INTO `tb_daily` (`daily_id`, `daily_date`, `daily_list`, `daily_no`, `daily_debit`, `daily_credit`, `daily_update`, `daily_save`) VALUES ('11', '2016-01-31', 'ค่าใช้จ่ายเบ็ดเตล็ด<br />\r\nเงินยืมทดรองเรือ<br />\r\nปรับปรุงเนื่องจากบันทึกเงินยืมทดรองเรือสูงไป ใน PV39/1', '6/1', '0.01', '0.01', '2017-05-11 12:21:11', NULL);
INSERT INTO `tb_daily` (`daily_id`, `daily_date`, `daily_list`, `daily_no`, `daily_debit`, `daily_credit`, `daily_update`, `daily_save`) VALUES ('12', '2016-01-31', 'ค่าใช้จ่ายเบ็ดเตล็ด<br />\r\nเจ้าหนี้ ภงด. หัก ณ ที่จ่าย<br />\r\nปป. บัญชีค่าใช้จ่ายเบ็ดเตล็ด กับ บัญชีเจ้าหนี้ ภงด.หัก ณ ที่จ่าย', '', '141.17', '141.17', '2017-05-11 12:21:33', NULL);


#
# TABLE STRUCTURE FOR: tb_expend
#

DROP TABLE IF EXISTS `tb_expend`;

CREATE TABLE `tb_expend` (
  `expend_id` int(11) NOT NULL AUTO_INCREMENT,
  `expend_date` date NOT NULL,
  `expend_pv` varchar(10) NOT NULL,
  `expend_list` text NOT NULL,
  `expend_list2` varchar(255) DEFAULT NULL,
  `expend_check` varchar(20) DEFAULT NULL,
  `expend_em1` varchar(20) DEFAULT NULL,
  `expend_cash` double DEFAULT NULL,
  `expend_bank` double DEFAULT NULL,
  `expend_creditor` double DEFAULT NULL,
  `expend_ship` double DEFAULT NULL,
  `expend_advance` double DEFAULT NULL,
  `expend_freight` double DEFAULT NULL,
  `expend_carriage` double DEFAULT NULL,
  `expend_port` double DEFAULT NULL,
  `expend_container` double DEFAULT NULL,
  `expend_pp30` double DEFAULT NULL,
  `expend_insurance` double DEFAULT NULL,
  `expend_tax` double DEFAULT NULL,
  `expend_phone` double DEFAULT NULL,
  `expend_edi` double DEFAULT NULL,
  `expend_electric` double DEFAULT NULL,
  `expend_salary` double DEFAULT NULL,
  `expend_expenses` double DEFAULT NULL,
  `expend_em2` double DEFAULT NULL,
  `expend_account` varchar(255) DEFAULT NULL,
  `expend_account2` varchar(255) DEFAULT NULL,
  `expend_em3` varchar(10) DEFAULT NULL,
  `expend_em33` varchar(10) DEFAULT NULL,
  `expend_amount` double DEFAULT NULL,
  `expend_amount2` double DEFAULT NULL,
  `expend_update` timestamp NULL DEFAULT NULL,
  `expend_save` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`expend_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `tb_expend` (`expend_id`, `expend_date`, `expend_pv`, `expend_list`, `expend_list2`, `expend_check`, `expend_em1`, `expend_cash`, `expend_bank`, `expend_creditor`, `expend_ship`, `expend_advance`, `expend_freight`, `expend_carriage`, `expend_port`, `expend_container`, `expend_pp30`, `expend_insurance`, `expend_tax`, `expend_phone`, `expend_edi`, `expend_electric`, `expend_salary`, `expend_expenses`, `expend_em2`, `expend_account`, `expend_account2`, `expend_em3`, `expend_em33`, `expend_amount`, `expend_amount2`, `expend_update`, `expend_save`) VALUES ('1', '2016-01-05', '1/1', 'ชำระค่าขนส่งตามใบวางบิล 15 - 0548', 'บจ.ที.เค', '00535302', '1/6', '0', '70290', '710', '0', '0', '0', '71000', '18657.3', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '0', '0', NULL, NULL);
INSERT INTO `tb_expend` (`expend_id`, `expend_date`, `expend_pv`, `expend_list`, `expend_list2`, `expend_check`, `expend_em1`, `expend_cash`, `expend_bank`, `expend_creditor`, `expend_ship`, `expend_advance`, `expend_freight`, `expend_carriage`, `expend_port`, `expend_container`, `expend_pp30`, `expend_insurance`, `expend_tax`, `expend_phone`, `expend_edi`, `expend_electric`, `expend_salary`, `expend_expenses`, `expend_em2`, `expend_account`, `expend_account2`, `expend_em3`, `expend_em33`, `expend_amount`, `expend_amount2`, `expend_update`, `expend_save`) VALUES ('2', '2016-01-05', '2/1', 'ชำระค่าขนส่งตามใบวางบิล 15-0549', 'บจ.ทีเค', '00535302', '2/6', '0', '63360', '640', '0', '0', '0', '64000', '17042', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '0', '0', NULL, NULL);
INSERT INTO `tb_expend` (`expend_id`, `expend_date`, `expend_pv`, `expend_list`, `expend_list2`, `expend_check`, `expend_em1`, `expend_cash`, `expend_bank`, `expend_creditor`, `expend_ship`, `expend_advance`, `expend_freight`, `expend_carriage`, `expend_port`, `expend_container`, `expend_pp30`, `expend_insurance`, `expend_tax`, `expend_phone`, `expend_edi`, `expend_electric`, `expend_salary`, `expend_expenses`, `expend_em2`, `expend_account`, `expend_account2`, `expend_em3`, `expend_em33`, `expend_amount`, `expend_amount2`, `expend_update`, `expend_save`) VALUES ('3', '2016-01-05', '3/1', 'ชำระค่าขนส่งตามใบวางบิล 15-0539', 'บจ.ทีเค', '00535302', '3/6', '0', '59895', '605', '0', '0', '0', '60500', '15188.2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '0', '0', NULL, NULL);
INSERT INTO `tb_expend` (`expend_id`, `expend_date`, `expend_pv`, `expend_list`, `expend_list2`, `expend_check`, `expend_em1`, `expend_cash`, `expend_bank`, `expend_creditor`, `expend_ship`, `expend_advance`, `expend_freight`, `expend_carriage`, `expend_port`, `expend_container`, `expend_pp30`, `expend_insurance`, `expend_tax`, `expend_phone`, `expend_edi`, `expend_electric`, `expend_salary`, `expend_expenses`, `expend_em2`, `expend_account`, `expend_account2`, `expend_em3`, `expend_em33`, `expend_amount`, `expend_amount2`, `expend_update`, `expend_save`) VALUES ('4', '2016-01-05', '4/1', 'ชำระค่าขนส่งตามใบวางบิล 15-0537', 'บจ.ทีเค', '00535302', '4/6', '0', '79200', '800', '0', '0', '0', '80000', '20641.4', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '0', '0', NULL, NULL);
INSERT INTO `tb_expend` (`expend_id`, `expend_date`, `expend_pv`, `expend_list`, `expend_list2`, `expend_check`, `expend_em1`, `expend_cash`, `expend_bank`, `expend_creditor`, `expend_ship`, `expend_advance`, `expend_freight`, `expend_carriage`, `expend_port`, `expend_container`, `expend_pp30`, `expend_insurance`, `expend_tax`, `expend_phone`, `expend_edi`, `expend_electric`, `expend_salary`, `expend_expenses`, `expend_em2`, `expend_account`, `expend_account2`, `expend_em3`, `expend_em33`, `expend_amount`, `expend_amount2`, `expend_update`, `expend_save`) VALUES ('5', '2016-01-15', '15/1', 'ชำระค่าบริการ EDI เดือนธันวาคม 58', 'บมจ. กสท.', 'B ตัดบัญชี', '', '0', '2157.66', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'ค่าใช้จ่ายค้างจ่าย', 'ภาษีซื้อค้างรับ', '', '', '2016.5', '141.1', NULL, NULL);


#
# TABLE STRUCTURE FOR: tb_revenue
#

DROP TABLE IF EXISTS `tb_revenue`;

CREATE TABLE `tb_revenue` (
  `revenue_id` int(11) NOT NULL AUTO_INCREMENT,
  `revenue_date` date NOT NULL,
  `revenue_list` text NOT NULL,
  `revenue_em1` varchar(10) DEFAULT NULL,
  `revenue_bank` double DEFAULT NULL,
  `revenue_note` double DEFAULT NULL,
  `revenue_debtor` double DEFAULT NULL,
  `revenue_cash` double DEFAULT NULL,
  `revenue_trade` double DEFAULT NULL,
  `revenue_freight` double DEFAULT NULL,
  `revenue_tax` double DEFAULT NULL,
  `revenue_advance` double DEFAULT NULL,
  `revenue_expenses` double DEFAULT NULL,
  `revenue_payable` double DEFAULT NULL,
  `revenue_taxfuture` double DEFAULT NULL,
  `revenue_account` varchar(255) DEFAULT NULL,
  `revenue_account2` varchar(255) DEFAULT NULL,
  `revenue_em22` varchar(10) DEFAULT NULL,
  `revenue_em2` varchar(10) DEFAULT NULL,
  `revenue_amount` double DEFAULT NULL,
  `revenue_amount2` double DEFAULT NULL,
  `revenue_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `revenue_save` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`revenue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `tb_revenue` (`revenue_id`, `revenue_date`, `revenue_list`, `revenue_em1`, `revenue_bank`, `revenue_note`, `revenue_debtor`, `revenue_cash`, `revenue_trade`, `revenue_freight`, `revenue_tax`, `revenue_advance`, `revenue_expenses`, `revenue_payable`, `revenue_taxfuture`, `revenue_account`, `revenue_account2`, `revenue_em22`, `revenue_em2`, `revenue_amount`, `revenue_amount2`, `revenue_update`, `revenue_save`) VALUES ('1', '2016-01-15', 'ใบรวมรับเงิน', 'R 1/1x', '321710.94', '0', '1983.5', '0', '36305.25', NULL, '2485', '239822.94', '0', '0', '0', 'เงินทดรองมัดจำตู้', 'คชจ.บ้านพิธีการ', 'ย 5.6', 'ย 1.18', '10000', '-200', '2017-05-13 08:55:03', NULL);
INSERT INTO `tb_revenue` (`revenue_id`, `revenue_date`, `revenue_list`, `revenue_em1`, `revenue_bank`, `revenue_note`, `revenue_debtor`, `revenue_cash`, `revenue_trade`, `revenue_freight`, `revenue_tax`, `revenue_advance`, `revenue_expenses`, `revenue_payable`, `revenue_taxfuture`, `revenue_account`, `revenue_account2`, `revenue_em22`, `revenue_em2`, `revenue_amount`, `revenue_amount2`, `revenue_update`, `revenue_save`) VALUES ('2', '2016-01-30', 'ใบรวมรับเงิน', 'R 2/1', '920081.71', '0', '8063', '0', '787876.06', NULL, '8088', '132260.65', '0', '0', '0', '', '', '', '', '0', '0', '2017-05-11 15:31:49', NULL);


#
# TABLE STRUCTURE FOR: tb_sumdata
#

DROP TABLE IF EXISTS `tb_sumdata`;

CREATE TABLE `tb_sumdata` (
  `sumdata_id` int(11) NOT NULL AUTO_INCREMENT,
  `sumdata_sumid` int(11) NOT NULL,
  `sumdata_name` varchar(255) NOT NULL,
  `sumdata_em1` varchar(20) NOT NULL,
  `sumdata_em2` double NOT NULL,
  `sumdata_debit` double NOT NULL,
  `sumdata_credit` double NOT NULL,
  `sumdata_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sumdata_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES ('1', '127.0.0.1', 'member', '$2y$08$whnLEeeMNZnRD/Jv.doWd.wHRJdGxLyVFilkkhZ73vkhYbhiF0FfK', NULL, 'member@member.com', NULL, NULL, NULL, NULL, '1451903855', '1451905011', '1', 'Member', 'One', NULL, NULL);


#
# TABLE STRUCTURE FOR: users_groups
#

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES ('1', '1', '1');
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES ('2', '2', '1');


