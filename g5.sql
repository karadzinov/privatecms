-- MySQL dump 10.13  Distrib 8.1.0, for macos13.3 (x86_64)
--
-- Host: localhost    Database: g5
-- ------------------------------------------------------
-- Server version	8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'The Truth About a Reefer Truck (Pros, Cons, Profitability, and More)','18864-mx3QXi4LgT.jpg','<p>Have you ever considered how companies transport ice cream and fresh veggies to the store without them melting or spoiling? Well, all the credit goes to a reefer truck. But what is a reefer truck and is it worth a career? Let&rsquo;s get into the details and find out everything you need about a reefer truck.</p>\r\n\r\n<h2><em><strong>What is a reefer truck?</strong></em></h2>\r\n\r\n<p>A reefer truck, also known as a refrigerated truck, is a special vehicle used to carry things that need to stay cold. These things could be foods that can spoil easily or even medicines that need to be kept cool. Reefer trucks are super important because they help ensure these sensitive items stay fresh and safe. They play a big role in getting these products to people quickly and in good condition.</p>\r\n\r\n<h2><strong>History of reefer trucks</strong></h2>\r\n\r\n<p>Reefer trucks have a history that might surprise you. They&#39;ve been around for quite a while, but not exactly like we see them today. Way back before the 20th century, and before motor vehicles were a thing, people transported goods that needed to stay cool. They did this by using big blocks of ice. Of course, this method had its limitations, like not being great for long trips. Then, in the 1920s, things started to change. Companies in the United States began using special vehicles with containers that could keep things cold. These vehicles were used for short trips to move items like meat and fish. Fast forward to the 1930s, and we saw a significant development. Trucks and other vehicles with their cooling systems built right in started hitting the roads. By 1939, Fred Jones came up with the first portable air cooling unit. That was a game-changer! From there, the technology for keeping things cool while on the move continued to improve. It got more advanced and found its way into other vehicles, including reefer trucks,&nbsp;<a href=\"https://cdlworker.com/blog/dry-van\">dry vans</a>, or even ships and planes. It&#39;s quite a journey from those ice-filled wagons of the past!</p>\r\n\r\n<p><a href=\"https://cdlworker.com/application\" target=\"_blank\"><img alt=\"trucking jobs available\" src=\"https://cdlworker.com/userfiles/images/trucking%20jobs.png\" /></a></p>\r\n\r\n<h2>Why are refrigerated trucks called reefers?</h2>\r\n\r\n<p>Refrigerated trucks are often called reefers.&nbsp;This short name comes from refrigerator and it helps to describe what these trucks do. It all started long ago when people used ships to move things that needed to stay cold.&nbsp;These ships took the cargo to refrigerated warehouses, which they called reefers. These special warehouses were made to store and send things like food that could go bad. They got the name reefer from the big blocks of ice they used to keep the food cold.&nbsp;Nowadays, we still call refrigerated trucks reefers, which means they transport things that need to stay at a specific temperature.</p>\r\n\r\n<h2>Understanding the process of reefer trucking</h2>\r\n\r\n<p>A reefer truck resembles typical semi-trucks but has mechanisms for maintaining specific temperature settings.</p>\r\n\r\n<p>The key components that make refrigerated trucking work include:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Interior design: Reefer trucks are thoughtfully designed with internal vents and high-quality insulation. This structural arrangement is essential for maintaining the desired temperature within the cargo hold.</p>\r\n	</li>\r\n	<li>\r\n	<p>Refrigeration system: Unlike standard trucks, reefers have an active cooling system. This system allows for transporting frozen and refrigerated items by actively controlling the temperature within the cargo space.</p>\r\n	</li>\r\n	<li>\r\n	<p>Cooling process: A small diesel engine connected to a compressor is at the heart of this cooling mechanism. The compressor plays a vital role in refrigeration by compressing a gaseous refrigerant. The compression of this gas results in heat, and this heat exchange occurs in the condenser, much like how a car&#39;s radiator cools its engine.</p>\r\n	</li>\r\n	<li>\r\n	<p>Heat exchange: The liquefied gas, still under pressure, moves from the condenser to the evaporator. In the evaporator, the refrigerant undergoes expansion and transforms into a gas. This transformation absorbs heat from the surroundings, causing the truck&#39;s interior to become cold.</p>\r\n	</li>\r\n	<li>\r\n	<p>Continuous cycle: The refrigeration process is continuous. The air inside the trailer flows into the evaporator, further cooling the interior space and eventually returning to the compressor. This cycle ensures a consistent and controlled temperature within the truck.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Before goods are loaded onto a reefer truck, they are often pre-cooled to ensure they remain in the best possible condition during transport. This method of transportation is vital for industries requiring precise temperature control, such as food and pharmaceuticals. By understanding this process, one can appreciate the complexity of the logistics involved in keeping sensitive cargo at the right temperature throughout its journey.</p>\r\n\r\n<h2>Is reefer trucking profitable?</h2>\r\n\r\n<p>While it varies from carrier to carrier, reefer trucking can be lucrative. According to the American Trucking Association (ATA), reefer trucking is a steadily growing market. It&#39;s fueled by consumers&#39; increasing demand for fresh and healthy food. In 2019, refrigerated carriers in the U.S. moved over 72 billion pounds of freight. Profits in reefer trucking can fluctuate seasonally. Demand for refrigerated transportation skyrockets during harvest seasons, such as summer, for fruits and vegetables. According to the U.S. Bureau of Labor Statistics, drivers may find increased work and earnings during these periods. Other than this, the trucking industry publication DAT Solutions reports on the demand and rates for reefer trucking. The rates vary widely based on factors like the time of year and location. Increased competition in some areas can lead to lower rates, affecting profitability.&nbsp;Profits also depend on how many others do the same thing in the same place. More competition can mean less money for you. Rules and regulations about moving cold stuff can also add to the cost. While refrigerated trucking can be profitable, it&#39;s influenced by seasonality, fuel costs, and market rates. Successful reefer&nbsp;<a href=\"https://cdlworker.com/blog/trucking-companies\">trucking businesses</a>&nbsp;plan routes carefully, manage their costs efficiently and comply with regulations. By doing so, they can maximize their profits in this specialized trucking industry sector.</p>\r\n\r\n<h2>Is a reefer truck worth it?</h2>\r\n\r\n<p>Refrigerated transportation can be a viable option based on specific considerations. Carriers and&nbsp;<a href=\"https://cdlworker.com/blog/owner-operator-jobs\">owner-operators</a>&nbsp;need to investigate whether the higher pay and cargo adaptability will lead to increased earnings.</p>\r\n\r\n<h3>Pros:</h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p>People want fresh things: Reefer trucks are needed because people want fresh stuff like fruits, dairy, and medicine. Fresh is good, so these trucks are usually in demand.</p>\r\n	</li>\r\n	<li>\r\n	<p>Money at harvest time: When fruits and veggies are ready, more people need reefer trucks. That means more money during harvest time.</p>\r\n	</li>\r\n	<li>\r\n	<p>Lots of things to carry: Reefer trucks can carry all kinds of stuff, not just food. That means you won&#39;t run out of work when some things are less popular.</p>\r\n	</li>\r\n	<li>\r\n	<p>Keeping things good: Reefer trucking has strict rules, and that&#39;s good because it keeps the stuff you&#39;re carrying safe and healthy. When customers know their goods are in good hands, they&#39;ll hire you more.</p>\r\n	</li>\r\n	<li>\r\n	<p>Long contracts: You might get long contracts from suppliers or stores, which are like promises to work together for a while. That means you get paid for longer.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3>Cons:</h3>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Thirsty trucks: Reefer trucks need more fuel to keep things cold. When fuel prices increase, you have to pay more, which isn&#39;t good.</p>\r\n	</li>\r\n	<li>\r\n	<p>Expensive fix-ups: Refrigeration units need a lot of attention and fixing up sometimes, which costs money.</p>\r\n	</li>\r\n	<li>\r\n	<p>Uncertain money: How much you earn can change a lot. When the cargo isn&#39;t in demand, you might not make as much money.</p>\r\n	</li>\r\n	<li>\r\n	<p>Seasonal surprise: The type of cargo changes with the seasons so that money can differ from one time to another.</p>\r\n	</li>\r\n	<li>\r\n	<p>Too many rules: Reefer trucking has many rules about food safety. These rules can be hard to follow and might need more spending on training and stuff.</p>\r\n	</li>\r\n	<li>\r\n	<p>Hungry for power: Reefer trucks need power to stay cool when they&#39;re not driving. Finding the power and paying for it can be a challenge.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h2><a href=\"https://cdlworker.com/application\" target=\"_blank\"><img alt=\"cdl jobs\" src=\"https://cdlworker.com/userfiles/images/get-the-best-cdl-job.png\" /></a></h2>\r\n\r\n<h2>Our final take on a reefer truck</h2>\r\n\r\n<p>Getting your shoes into reefer trucking can have both advantages and challenges.&nbsp;While it offers a promising path for more lucrative loads and the chance to transport various goods, it also requires careful planning and commitment.&nbsp;As the demand for perishable products rises, reefer trucking remains a crucial part of our supply chain, offering numerous prospects for&nbsp;<a href=\"https://cdlworker.com/blog/truck-driver-jobs\">truck drivers</a>&nbsp;and carriers.&nbsp;To succeed in this field, extensive research, proper equipment, adherence to regulations, and a well-thought-out strategy are essential.&nbsp;For those ready to embrace the distinctive aspects of refrigerated transportation, it can prove to be a valuable and profitable journey on the road.</p>\r\n','the-truth-about-a-reefer-truck-pros-cons-profitability-and-more','2023-12-06 18:49:05',72),(3,'Something about truck drivers','22005-ramzoFYClH.jpg','<p>Нешто тука кратка дескрипција...</p>\r\n','something-about-truck-drivers','2023-12-06 19:26:21',32);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buildings` (
  `building_no` int NOT NULL AUTO_INCREMENT,
  `building_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`building_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buildings`
--

LOCK TABLES `buildings` WRITE;
/*!40000 ALTER TABLE `buildings` DISABLE KEYS */;
/*!40000 ALTER TABLE `buildings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `martin`
--

DROP TABLE IF EXISTS `martin`;
/*!50001 DROP VIEW IF EXISTS `martin`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `martin` AS SELECT 
 1 AS `userId`,
 1 AS `roleId`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `type` enum('new','old') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Mac Book',1200.50,'new','2023-11-10 18:35:26'),(3,'Mac Book PRO',950.00,'old','2023-11-10 18:35:46'),(5,'Acer',775.00,'new','2023-12-03 19:08:00');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `permission` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrator','view:user, view:admins'),(2,'Moderator','view:user, view:admins');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `room_no` int NOT NULL AUTO_INCREMENT,
  `room_name` varchar(255) NOT NULL,
  `building_no` int NOT NULL,
  PRIMARY KEY (`room_no`),
  KEY `building_no` (`building_no`),
  CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`building_no`) REFERENCES `buildings` (`building_no`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `roles` (`role_id`),
  CONSTRAINT `roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (32,'Martin','Karadzinov','martin@pingdevs.com','40599-golden-hour-husband-wife-bride-groom-portraits_0001-1024x688.jpg',NULL,'8d4e98bc53dc8c66ba98338e30638e7e'),(72,'Martin','Karadzinov','martin@myhost.mk',NULL,NULL,'65975a74ecc2cb99263ae4a447726392');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `martin`
--

/*!50001 DROP VIEW IF EXISTS `martin`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`martin`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `martin` AS select `u`.`id` AS `userId`,`roles`.`id` AS `roleId` from (`users` `u` join `roles` on((`u`.`role_id` = `roles`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-06 20:51:44
