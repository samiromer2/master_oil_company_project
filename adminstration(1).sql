
-- Database: `adminstration`


CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `telenumber` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `likeit` varchar(6) NOT NULL,
  `comments` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT 'Untitled.txt',
  `mime` varchar(50) NOT NULL DEFAULT 'text/plain',
  `size` bigint(255) unsigned NOT NULL DEFAULT '0',
  `data` mediumblob NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `product_name` varchar(20) NOT NULL DEFAULT '',
  `product_describtion` varchar(20) NOT NULL DEFAULT '',
  `product_quentity` varchar(20) NOT NULL DEFAULT '',
  `product_price` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` varchar(3) NOT NULL,
  `order_name` varchar(30) NOT NULL,
  `order_quentity` int(6) NOT NULL,
  `ordernubmer` int(3) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ordernubmer`)
) ;


CREATE TABLE IF NOT EXISTS `product` (
  `product_id` varchar(10) DEFAULT NULL,
  `product_name` varchar(20) NOT NULL DEFAULT '',
  `product_describtion` varchar(50) NOT NULL DEFAULT '',
  `product_quentity` varchar(50) NOT NULL DEFAULT '',
  `product_price` varchar(4) NOT NULL DEFAULT ''
) ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL DEFAULT '0',
  `Name` varchar(50) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `user_type` varchar(10) NOT NULL DEFAULT ''
) ;
