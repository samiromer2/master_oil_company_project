-- Database: `adminstration`


CREATE TABLE `file` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default 'Untitled.txt',
  `mime` varchar(50) NOT NULL default 'text/plain',
  `size` bigint(255) unsigned NOT NULL default '0',
  `data` mediumblob NOT NULL,
  `created` datetime NOT NULL default '0000-00-00 00:00:00',
  `product_name` varchar(20) NOT NULL default '',
  `product_describtion` varchar(20) NOT NULL default '',
  `product_quentity` varchar(20) NOT NULL default '',
  `product_price` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ;

CREATE TABLE `order` (
  `order_id` varchar(4) NOT NULL default '',
  `order_name` varchar(25) NOT NULL default '',
  `order_quentity` char(3) NOT NULL default ''
) ;


CREATE TABLE `product` (
  `product_id` varchar(10) default NULL,
  `product_name` varchar(20) NOT NULL default '',
  `product_describtion` varchar(50) NOT NULL default '',
  `product_quentity` varchar(50) NOT NULL default '',
  `product_price` varchar(4) NOT NULL default ''
) ;



CREATE TABLE `user` (
  `id` int(3) NOT NULL default '0',
  `Name` varchar(50) NOT NULL default '',
  `address` varchar(50) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  `user_type` varchar(10) NOT NULL default ''
) ;


CREATE TABLE `contact` (
  `id` int(3) NOT NULL default '0',
  `Name` varchar(50) NOT NULL default '',
  `address` varchar(50) NOT NULL default '',
   `telenumber` varchar(50) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `comments` varchar(50) NOT NULL default '',
 
) ;

