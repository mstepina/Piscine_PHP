CREATE TABLE `user_card` (
  `id_user` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `birthdate` datetime NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_card`
--

LOCK TABLES `user_card` WRITE;
/*!40000 ALTER TABLE `user_card` DISABLE KEYS */;
INSERT INTO `user_card` VALUES (25,'hennegrave','severin','1978-07-05 00:00:00','hennegrave.severin@machin.com',' ','14740','PUTOT EN BESSIN',NULL),(7,'glachant','guy','1935-01-27 00:00:00','glachant.guy@machin.com',' ','59274','MARQUILLIES',NULL),(26,'coulm','marwan','1934-11-16 00:00:00','coulm.marwan@machin.com',' ','06470','VILLENEUVE D ENTRAUNE',NULL),(27,'obriot','franck','1983-06-10 00:00:00','obriot.franck@machin.com',' ','01420','SURJOUX',NULL),(19,'bordoni','mikael','1980-10-19 00:00:00','bordoni.mikael@machin.com',' ','87140','THOURON',NULL),(1,'lienhart','quoc-quang','1935-04-15 00:00:00','lienhart.quoc-quang@machin.com',' ','03500','MONETAY SUR ALLIER',NULL),(30,'brinon','florestan','1974-05-09 00:00:00','brinon.florestan@machin.com',' ','36340','MAILLET',NULL),(24,'de-ponfilly','kamel','1933-06-14 00:00:00','de-ponfilly.kamel@machin.com',' ','25340','ANTEUIL',NULL),(4,'domingues','stephane','1944-01-03 00:00:00','domingues.stephane@machin.com',' ','32120','PUYCASQUIER',NULL),(16,'vaillier','kamel','1968-12-19 00:00:00','vaillier.kamel@machin.com',' ','61260','MALE',NULL),(17,'wetter','frederic-eugene','1987-07-24 00:00:00','wetter.frederic-eugene@machin.com',' ','36130','MONTIERCHAUME',NULL),(10,'schiff','arnaud','1985-05-03 00:00:00','schiff.arnaud@machin.com',' ','01260','VIEU',NULL),(11,'valet','jean-remi','1959-08-24 00:00:00','valet.jean-remi@machin.com',' ','14190','MAIZIERES',NULL),(13,'dupuy','marie','1949-08-07 00:00:00','dupuy.marie@machin.com',' ','71390','ST GERMAIN LES BUXY',NULL),(9,'verhaeghe','lilian','1974-03-13 00:00:00','verhaeghe.lilian@machin.com',' ','65100','LOUBAJAC',NULL),(23,'davoine-graziani','faouzi','1972-04-14 00:00:00','davoine-graziani.faouzi@machin.com',' ','33180','ST SEURIN DE CADOURNE',NULL),(21,'ruckebusch','abdesslam','1966-09-19 00:00:00','ruckebusch.abdesslam@machin.com',' ','57420','SECOURT',NULL),(15,'lamory','remi','1949-03-08 00:00:00','lamory.remi@machin.com',' ','45360','CHATILLON SUR LOIRE',NULL),(28,'fedorowicz','constantin','1976-09-27 00:00:00','fedorowicz.constantin@machin.com',' ','51220','CORMICY',NULL),(3,'belanyi','nikita','1932-11-11 00:00:00','belanyi.nikita@machin.com',' ','85110','SIGOURNAIS',NULL),(12,'renault','joel','1960-04-29 00:00:00','renault.joel@machin.com',' ','33350','CASTILLON LA BATAILLE',NULL),(8,'arbona','naji','1976-09-06 00:00:00','arbona.naji@machin.com',' ','32270','BLANQUEFORT',NULL),(29,'bouamar','ravi','1985-10-15 00:00:00','bouamar.ravi@machin.com',' ','60420','COIVREL',NULL),(18,'ait','gildas','1971-11-03 00:00:00','ait.gildas@machin.com',' ','56500','LOCMINE',NULL),(14,'michaux','anton','1943-05-26 00:00:00','michaux.anton@machin.com',' ','01370','TREFFORT CUISIAT',NULL),(20,'soulac','theo','1983-10-19 00:00:00','soulac.theo@machin.com',' ','49290','CHAUDEFONDS SUR LAYON',NULL),(5,'dang','bruno','1943-12-03 00:00:00','dang.bruno@machin.com',' ','09700','LA BASTIDE DE LORDAT',NULL),(6,'pelissier','anishley','1974-11-21 00:00:00','pelissier.anishley@machin.com',' ','88260','ESLEY',NULL),(22,'bouchakhchoukha','smael','1942-06-05 00:00:00','bouchakhchoukha.smael@machin.com',' ','02810','MARIGNY EN ORXOIS',NULL),(2,'finidori','matthew','1932-01-10 00:00:00','finidori.matthew@machin.com',' ','64420','ESLOURENTIES DABAN',NULL);
/*!40000 ALTER TABLE `user_card` ENABLE KEYS */;
UNLOCK TABLES;

