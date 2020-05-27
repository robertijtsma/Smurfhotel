/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : phx

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2012-02-24 13:37:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `points_badge`
-- ----------------------------
DROP TABLE IF EXISTS `points_badge`;
CREATE TABLE `points_badge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `badge_cost` text COLLATE latin1_general_ci NOT NULL,
  `badge_code` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of points_badge
-- ----------------------------

-- ----------------------------
-- Table structure for `points_commands`
-- ----------------------------
DROP TABLE IF EXISTS `points_commands`;
CREATE TABLE `points_commands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost` varchar(255) NOT NULL,
  `command` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of points_commands
-- ----------------------------

-- ----------------------------
-- Table structure for `points_credits`
-- ----------------------------
DROP TABLE IF EXISTS `points_credits`;
CREATE TABLE `points_credits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `credits` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ID` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of points_credits
-- ----------------------------

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

-- ----------------------------
-- Table structure for `points_furni`
-- ----------------------------
DROP TABLE IF EXISTS `points_furni`;
CREATE TABLE `points_furni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `points` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of points_furni
-- ----------------------------

-- ----------------------------
-- Table structure for `points_logs`
-- ----------------------------
DROP TABLE IF EXISTS `points_logs`;
CREATE TABLE `points_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bought` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `attempt` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of points_logs
-- ----------------------------

-- ----------------------------
-- Table structure for `points_pixels`
-- ----------------------------
DROP TABLE IF EXISTS `points_pixels`;
CREATE TABLE `points_pixels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `points` varchar(255) NOT NULL,
  `pixels` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of points_pixels
-- ----------------------------

-- ----------------------------
-- Table structure for `points_vip`
-- ----------------------------
DROP TABLE IF EXISTS `points_vip`;
CREATE TABLE `points_vip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `points` varchar(255) NOT NULL,
  `credits` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of points_vip
-- ----------------------------

ALTER TABLE `users` ADD COLUMN `vip_time` varchar(999) NOT NULL DEFAULT 0;
