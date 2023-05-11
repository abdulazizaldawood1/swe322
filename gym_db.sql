/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 100418
Source Host           : localhost:3306
Source Database       : gym_db

Target Server Type    : MYSQL
Target Server Version : 100418
File Encoding         : 65001

Date: 2022-12-13 04:01:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bookings
-- ----------------------------
DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `class_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bookings
-- ----------------------------

-- ----------------------------
-- Table structure for classes
-- ----------------------------
DROP TABLE IF EXISTS `classes`;
CREATE TABLE `classes` (
  `class_id` int(30) NOT NULL,
  `trainer_name` varchar(255) DEFAULT NULL,
  `class_date` date DEFAULT NULL,
  `number_of_trainees` int(30) DEFAULT NULL,
  `max_num_of_trainees` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of classes
-- ----------------------------
INSERT INTO `classes` VALUES ('1', 'yoga', '2023-3-12', '30', '30');
INSERT INTO `classes` VALUES ('2', 'swimming', '2023-6-27', '15', '20');
INSERT INTO `classes` VALUES ('3', 'Football', '2023-5-06', '7', '11');
INSERT INTO `classes` VALUES ('4', 'Boxing', '2023-2-24', '10', '10');
INSERT INTO `classes` VALUES ('5', 'cardio', '2023-3-23', '16', '20');
-- ----------------------------
-- Table structure for usertable
-- ----------------------------
DROP TABLE IF EXISTS `usertable`;
CREATE TABLE `usertable` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usertable
-- ----------------------------


-- ----------------------------
-- Table structure for user_account
-- ----------------------------
DROP TABLE IF EXISTS `user_account`;
CREATE TABLE `user_account` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userpwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_account
-- ----------------------------