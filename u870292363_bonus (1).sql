-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2018 at 02:01 PM
-- Server version: 10.2.17-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u870292363_bonus`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `user_id` int(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pay_out` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`user_id`, `phone`, `user_name`, `password`, `pay_out`) VALUES
(1, 9898989898, 'tanusha', '1', 100),
(2, 7987677003, 'Abhay', 'dhor', 0),
(3, 8962209349, 'Yuvraj yadav', 'yuvraj13', 0),
(4, 8349797058, 'Bhavesh Sharma', 'rockindia', 0),
(5, 8871480750, 'Rahul Parihar', 'rahul@123', 0),
(6, 7542938348, 'Amisha', 'kalyani', 0),
(7, 8109085177, 'Anand', 'andy123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `site_id` int(10) NOT NULL,
  `site_name` varchar(500) NOT NULL,
  `buy_time` bigint(50) NOT NULL,
  `total_price` int(10) NOT NULL,
  `you_get` int(10) NOT NULL,
  `payment_done` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `site_id`, `site_name`, `buy_time`, `total_price`, `you_get`, `payment_done`) VALUES
(1, 1, 0, 'vivo y81 gold 32 gb', 1540652643, 10000, 100, 'done'),
(2, 5, 9, 'Flipkart', 1541073017, 0, 0, 'pending'),
(3, 6, 2, 'Amazon', 1543493979, 0, 0, 'pending'),
(4, 6, 1, 'Flipkart', 1543540080, 0, 0, 'pending'),
(5, 7, 1, 'Flipkart', 1544872736, 0, 0, 'pending'),
(6, 7, 2, 'Amazon', 1544874165, 0, 0, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `time` bigint(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `user_id`, `phone`, `time`, `amount`, `status`) VALUES
(0, 1, 9898989898, 1540670205, 1120, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `sitelist`
--

CREATE TABLE `sitelist` (
  `site_id` int(10) NOT NULL,
  `site_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `site_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(10) NOT NULL,
  `extra` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `main` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sitelist`
--

INSERT INTO `sitelist` (`site_id`, `site_name`, `site_link`, `image_link`, `amount`, `extra`, `main`) VALUES
(1, 'Flipkart', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.flipkart.com%2F', 'https://cdn0.cuelinks.com/campaigns/1/medium/Flipkart_logo.jpg?1433139772', 9, '', 1),
(2, 'Amazon', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.amazon.in%2F', 'https://cdn0.cuelinks.com/campaigns/817/medium/Amazon.in__Online_Shopping_for_Books__Kindle_E_Readers__Kindle_accessories__E_Books_and_Movies___TV.png?1371175177', 9, '', 1),
(3, 'Myntra', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.myntra.com%2F', 'https://cdn0.cuelinks.com/campaigns/101/medium/Myntra.png?1491896562', 5, '', 1),
(4, 'Bigbasket', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.bigbasket.com', 'https://cdn0.cuelinks.com/campaigns/2401/medium/bb_logo.png?1449479807', 5, '', 1),
(5, 'Jabong', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.jabong.com%2F', 'https://cdn0.cuelinks.com/campaigns/80/medium/jabong.jpg?1427448798', 9, '', 1),
(6, 'Amazon prime', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.primevideo.com%2F', 'https://cdn0.cuelinks.com/campaigns/2997/medium/prime.png?1516698365', 52, '', 2),
(7, 'Lenskart', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.lenskart.com%2F', 'https://cdn0.cuelinks.com/campaigns/91/medium/Lenskart.png?1490766937', 6, '', 1),
(8, 'Paytm', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fpaytm.com', 'https://cdn0.cuelinks.com/campaigns/893/medium/Paytm.jpg?1427450357', 2, '', 1),
(9, 'Paytm mall', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fpaytmmall.com', 'https://cdn0.cuelinks.com/campaigns/3136/medium/paymall.png?1493720209', 5, '*Only transactions done from PayTMMall (and not PayTM) will be considered by the merchant for validations.', 1),
(10, 'Shopclues', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.shopclues.com%2F', 'https://cdn0.cuelinks.com/campaigns/152/medium/Shopclues.png?1493899872', 7, '', 1),
(11, 'Amazon app install', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Din.amazon.mShop.android.shopping', 'https://cdn0.cuelinks.com/campaigns/2438/medium/amazon_app.png?1528280209', 5, 'Install', 0),
(12, 'Lybrate app install', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.lybrate.phoenix', 'https://cdn0.cuelinks.com/campaigns/3578/medium/lybrate_cpi.png?1524571689', 5, 'Install , Registration , Ask Question', 0),
(13, 'MakeMyTrip app install', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.makemytrip', 'https://cdn0.cuelinks.com/campaigns/2476/medium/MakeMyTrip_Flights_Hotel_IRCTC___Android_Apps_on_Google_Play.png?1456722870', 30, 'Install , Booking', 0),
(14, 'Snapdeal app install', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.snapdeal.main%26hl%3Den', 'https://cdn0.cuelinks.com/campaigns/3646/medium/snapdeal.png?1529672484', 20, 'Install , Registration , Transaction', 0),
(15, 'Stalkbuylove app install', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.advictoriam.stalkbuylove', 'https://cdn0.cuelinks.com/campaigns/2455/medium/SBL.png?1530186615', 50, 'Install ,Transactions', 0),
(16, 'Taskbucks app install', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.taskbucks.taskbucks', 'https://cdn0.cuelinks.com/merchant/2547/medium/unnamed.jpg?1482315253', 4, 'Install , Register', 0),
(17, 'Tata Cliq app install', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.tul.tatacliq', 'https://cdn0.cuelinks.com/campaigns/3301/medium/tatacliq_cpi.png?1501591322', 50, 'Install , Transaction', 0),
(18, 'Testbook app install', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.testbook.tbapp', 'https://cdn0.cuelinks.com/campaigns/3665/medium/Testbook.png?1531817469', 50, 'Install , Transaction', 0),
(19, 'Mobikwik', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.mobikwik.com%2F', 'https://cdn0.cuelinks.com/campaigns/1887/medium/mobikwik_logo.png?1499865596', 6, '', 1),
(20, 'Foodpanda', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.foodpanda.in%2F', 'https://cdn0.cuelinks.com/campaigns/187/medium/foodpand.png?1502888078', 40, '', 2),
(21, 'Makemytrip(flights)', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.makemytrip.com%2Fflights', 'https://cdn0.cuelinks.com/campaigns/93/medium/Make_my_trip.png?1503474625', 90, '', 2),
(22, 'Swiggy', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.swiggy.com%2F', 'https://cdn0.cuelinks.com/campaigns/2194/medium/Swiggy.png?1490352043', 20, '', 2),
(23, 'Dominos', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fpizzaonline.dominos.co.in%2F', 'https://cdn0.cuelinks.com/campaigns/39/medium/Dominos.png?1489137591', 25, '', 2),
(24, 'Cleartrip', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.cleartrip.com%2F', 'https://cdn0.cuelinks.com/campaigns/29/medium/cleartrip_logo_medium.gif?1342766947', 300, '', 2),
(25, 'Bigrock', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.bigrock.in', 'https://cdn0.cuelinks.com/campaigns/18/medium/Big-Rock.png?1493898273', 600, '', 2),
(26, 'McDonalds', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.mcdelivery.co.in%2F', 'https://cdn0.cuelinks.com/campaigns/765/medium/MCDonalds.png?1504500381', 30, '', 2),
(27, 'Urban Ladder', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.urbanladder.com%2F', 'https://cdn0.cuelinks.com/campaigns/2136/medium/Urbanladder.png?1524229562', 230, '', 2),
(28, 'Internshala', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Ftrainings.internshala.com%2F', 'https://cdn0.cuelinks.com/campaigns/3627/medium/Internshala.png?1527575974', 120, '', 2),
(29, '1mg', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.1mg.com%2F', 'https://cdn0.cuelinks.com/campaigns/2174/medium/1mg-512x512-logo.jpg?1530791050', 300, '', 2),
(30, 'Acko', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.acko.com%2Flp%2Fcomprehensiveaff%2F', 'https://cdn0.cuelinks.com/campaigns/3667/medium/acko_logo.JPG?1532416770', 42, '', 2),
(31, 'Adidas', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fshop.adidas.co.in', 'https://cdn0.cuelinks.com/campaigns/2191/medium/Adidas_%282%29.png?1493896535', 12, '', 1),
(32, 'Agoda', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.agoda.com%2F', 'https://cdn0.cuelinks.com/campaigns/326/medium/Agoda.png?1516080108', 4, '', 1),
(33, 'Airtel', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.airtel.in%2Fbroadband%2F', 'https://cdn0.cuelinks.com/campaigns/207/medium/airtel.png?1517827681', 1200, '', 2),
(34, 'Ajio', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.ajio.com%2F', 'https://cdn0.cuelinks.com/campaigns/2589/medium/Ajio.png?1516080211', 16, '', 1),
(35, 'Aakash', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.aakash.ac.in%2Fanthe%2Fpromotion%2Fam.php', 'https://cdn0.cuelinks.com/campaigns/3686/medium/Aakash_%281%29.png?1537264210', 236, '', 2),
(36, 'Akbar Travels', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.akbartravels.com%2F', 'https://cdn0.cuelinks.com/merchant/2738/medium/Akbar_Travels.png?1494330379', 120, '', 2),
(37, 'AliExpress', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.aliexpress.com%2F', 'https://cdn0.cuelinks.com/campaigns/763/medium/AliExpress.png?1489062038', 5, '', 1),
(38, 'Beardo\r\n', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.beardo.in', 'https://cdn0.cuelinks.com/campaigns/2564/medium/beardo.png?1497000496', 7, '', 1),
(39, 'Beato', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fbeatoapp.com%2Fgluco-prepay%2F', 'https://cdn0.cuelinks.com/campaigns/3540/medium/Beato.png?1521717886', 487, '', 2),
(40, 'Bata', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fbata.in%2F', 'https://cdn0.cuelinks.com/campaigns/757/medium/bata.png?1362365679', 157, '', 2),
(41, 'Biba', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.biba.in%2F', 'https://cdn0.cuelinks.com/merchant/1820/medium/Biba.png?1516178916', 8, '', 2),
(42, 'Cashify', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.cashify.in%2F', 'https://cdn0.cuelinks.com/campaigns/3433/medium/Cashify.png?1511876834', 78, '', 2),
(43, 'Bluestone', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.bluestone.com', 'https://cdn0.cuelinks.com/campaigns/20/medium/Bluestone.png?1489126953', 561, '', 2),
(44, 'Bookmyshow', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fin.bookmyshow.com%2F', 'https://cdn0.cuelinks.com/campaigns/3129/medium/book-my-show.png?1493139632', 9, '', 2),
(45, 'Booking.com', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.booking.com%2Findex.html', 'https://cdn0.cuelinks.com/campaigns/1715/medium/booking.com.png?1510222242', 3, '', 1),
(46, 'Cipla Immuno Boosters', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.immunoboosters.in%2F', 'https://cdn0.cuelinks.com/campaigns/3630/medium/cipla.jpg?1527597623', 168, '', 2),
(47, 'Easymytrip', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.easemytrip.com%2F', 'https://cdn0.cuelinks.com/campaigns/3363/medium/EaseMyTrip.png?1506684235', 150, '', 2),
(48, 'Expedia India', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.expedia.co.in%2F', 'https://cdn0.cuelinks.com/campaigns/42/medium/Expedia-India.png?1489138143', 4, '', 1),
(49, 'Faasos', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Forder.faasos.io%2F', 'https://cdn0.cuelinks.com/campaigns/2487/medium/fassos.png?1496897999', 67, '', 2),
(50, 'FirstCry', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=http%3A%2F%2Fwww.firstcry.com%2F', 'https://cdn0.cuelinks.com/campaigns/49/medium/Firstcry.png?1489139795', 22, '', 2),
(51, 'Hotels.com', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fin.hotels.com', 'https://cdn0.cuelinks.com/campaigns/243/medium/Hotels.Com-India.png?1489759320', 4, '', 1),
(52, 'Himalayan', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.himalayastore.com', 'https://cdn0.cuelinks.com/campaigns/1135/medium/himalaya.png?1525768880', 4, '', 1),
(53, 'Hostgator', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.hostgator.in%2F', 'https://cdn0.cuelinks.com/campaigns/2856/medium/Hostgator_logo.png?1477199383', 703, '', 2),
(54, 'JetAirways', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.jetairways.com%2FEN%2FIN%2FHome.aspx', 'https://cdn0.cuelinks.com/campaigns/82/medium/Jet-Airways.png?1486641796', 180, '', 2),
(55, 'Koovs', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.koovs.com%2F', 'https://cdn0.cuelinks.com/campaigns/88/medium/Koovs.png?1488883506', 6, '', 1),
(56, 'Lenovo', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.lenovo.com%2Fin%2Fen%2F', 'https://cdn0.cuelinks.com/campaigns/823/medium/lenovo.png?1502445526', 4, '', 1),
(57, 'Limeroad', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.limeroad.com%2F', 'https://cdn0.cuelinks.com/campaigns/354/medium/Limeroad.png?1513409313', 9, '', 1),
(58, 'Med Life', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fm.medlife.com%2F', 'https://cdn0.cuelinks.com/campaigns/2585/medium/Medlife-orange-logo-final.png?1512800263', 11, '', 1),
(59, 'MyBusTicket', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.mybustickets.in%2F', 'https://cdn0.cuelinks.com/campaigns/1926/medium/My-Bus-Tickets.png?1517988330', 10, '', 2),
(60, 'Netmeds', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.netmeds.com%2F', 'https://cdn0.cuelinks.com/campaigns/2351/medium/Netmeds.com__Online_Pharmacy_in_India_%E2%80%93_Buy_Medicines_Online.png?1442819652', 7, '', 1),
(61, 'PizzaHut', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fonline.pizzahut.co.in%2F', 'https://cdn0.cuelinks.com/campaigns/1653/medium/Pizzahut_%281%29.png?1498201337', 29, '', 2),
(62, 'Samsung  e-store', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fshop.samsung.com%2Fin%2F', 'https://cdn0.cuelinks.com/campaigns/3361/medium/Samsung-eStore.png?1506492713', 3, '', 1),
(63, 'Shein', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.shein.in%2F', 'https://cdn0.cuelinks.com/campaigns/558/medium/SheIn.png?1511154554', 8, '', 1),
(64, 'Titan eyeplus', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Feyeplus.titan.co.in%2F', 'https://cdn0.cuelinks.com/campaigns/3398/medium/Titan-Eyeplus.png?1509944590', 3, '', 1),
(65, 'TravelGuru', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.travelguru.com%2F', 'https://cdn0.cuelinks.com/campaigns/133/medium/Travelguru.jpg?1427452476', 7, '', 1),
(66, 'Dell', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=http%3A%2F%2Fwww.dell.com', 'https://cdn0.cuelinks.com/merchant/1482/medium/Dell.png?1535623439', 6, '', 1),
(67, 'Airtel', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.airtel.in%2Fbroadband%2F', 'https://cdn0.cuelinks.com/campaigns/207/medium/airtel.png?1517827681', 1200, '', 2),
(68, 'Snapdeal', 'https://linksredirect.com/?pub_id=43157CL38922&source=linkkit&url=https%3A%2F%2Fwww.snapdeal.com%2F', 'https://cdn0.cuelinks.com/campaigns/119/medium/SnapDeal.png?1520340610', 9, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `sitelist`
--
ALTER TABLE `sitelist`
  ADD PRIMARY KEY (`site_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
