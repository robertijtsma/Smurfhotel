-- ----------------------------
-- Table structure for `points_cron`
-- ----------------------------
DROP TABLE IF EXISTS `points_cron`;
CREATE TABLE `points_cron` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exc_last` varchar(999) NOT NULL,
  `exc_every` varchar(999) NOT NULL DEFAULT '86400',
  `file` varchar(999) NOT NULL,
  `enable` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of points_cron
-- ----------------------------
INSERT INTO `points_cron` VALUES ('1', '1330119198', '86400', 'reward.php', '1');

-- ----------------------------
-- Table structure for `points_daily`
-- ----------------------------
DROP TABLE IF EXISTS `points_daily`;
CREATE TABLE `points_daily` (
  `user_id` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of points_daily
-- ----------------------------
INSERT INTO `points_daily` VALUES ('0');