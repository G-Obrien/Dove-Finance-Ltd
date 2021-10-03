DROP TABLE IF EXISTS aboutus;

CREATE TABLE `aboutus` (
  `abid` int(11) NOT NULL AUTO_INCREMENT,
  `about` text NOT NULL,
  PRIMARY KEY (`abid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS additional_fees;

CREATE TABLE `additional_fees` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `fee` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO additional_fees VALUES("1","1","1023","Fine","2500");
INSERT INTO additional_fees VALUES("2","2","1002","Late Payment","41000");
INSERT INTO additional_fees VALUES("3","3","1002","Accumulated fines(3 Months)","30000");
INSERT INTO additional_fees VALUES("4","5","1002","Late Payment","14000");
INSERT INTO additional_fees VALUES("5","6","1002","Late Payment","40000");
INSERT INTO additional_fees VALUES("6","4","1000","Late Payment","24000");
INSERT INTO additional_fees VALUES("7","6","1002","Fine","10000");


DROP TABLE IF EXISTS attachment;

CREATE TABLE `attachment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `attached_file` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO attachment VALUES("1","1","1023","document/4887_File_cryptos documentation.docx","2021-05-01 12:11:34");
INSERT INTO attachment VALUES("2","2","1002","document/2782_File_Email.docx","2021-05-10 16:56:55");
INSERT INTO attachment VALUES("3","5","1002","document/2045_File_Marksheet Management System.docx","2021-05-13 13:45:57");


DROP TABLE IF EXISTS backup;

CREATE TABLE `backup` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `tracking_id` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO backup VALUES("1","1302","0.1","Gulu-City12x39","2021-07-07 14:37:40");
INSERT INTO backup VALUES("2","1302","0.15","Gulu-City12x39","2021-07-07 16:59:36");


DROP TABLE IF EXISTS banner;

CREATE TABLE `banner` (
  `banaid` int(11) NOT NULL AUTO_INCREMENT,
  `bannar` text NOT NULL,
  PRIMARY KEY (`banaid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO banner VALUES("1","bannar/sld2.jpg");


DROP TABLE IF EXISTS battachment;

CREATE TABLE `battachment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `attached_file` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO battachment VALUES("1","1","1023","bdocument/5605_File_Below is the screenshot of the welcome mail sent to me when I registered with namecheap.docx","2021-05-01 17:30:28");
INSERT INTO battachment VALUES("2","1","1023","bdocument/2630_File_Below is the screenshot of the welcome mail sent to me when I registered with namecheap.docx","2021-05-01 17:32:52");
INSERT INTO battachment VALUES("3","2","1023","bdocument/6815_File_cryptos documentation.docx","2021-05-01 17:38:20");
INSERT INTO battachment VALUES("4","3","1002","bdocument/2739_File_INTRODUCTION TO NIGERIA SOCIAL LIFE AND EARLY CIVILIZATION.docx","2021-05-01 19:35:25");
INSERT INTO battachment VALUES("5","4","1002","bdocument/4525_File_ESTHER.docx","2021-05-13 13:32:51");


DROP TABLE IF EXISTS borrowers;

CREATE TABLE `borrowers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `addrs1` text NOT NULL,
  `addrs2` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `nin` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `account` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO borrowers VALUES("1","Ongee","Patrick","patrick@gmail.com","0703527716","KORO","Koro-Abili","Gulu","North","110001","Uganda","Application for loan","0134405601","22000","img/stud3.jpg","2021-07-06 18:26:11","Pending");


DROP TABLE IF EXISTS collateral;

CREATE TABLE `collateral` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `idm` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type_of_collateral` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `make` varchar(200) NOT NULL,
  `serial_number` varchar(200) NOT NULL,
  `estimated_price` varchar(200) NOT NULL,
  `proof_of_ownership` text NOT NULL,
  `cimage` text NOT NULL,
  `observation` text NOT NULL,
  `status` text NOT NULL,
  `releasedate` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO collateral VALUES("1","1","1023","Plot of land","Personal Land","Family origin","5 Hectares","Plot-13 A1004G","10000000","Patrict Ongee","img/bland.jpg","Verified","Contained","2021-10-20");
INSERT INTO collateral VALUES("2","2","1002","Bull/Cattle","Farm Cattle","personal","First Loan","CW0130001","900000","Grace Abalo","img/bull.jpg","Good old bull"," ","0000-00-00");
INSERT INTO collateral VALUES("3","5","1002","Plot of Land","Land","Land","Land","Plot-10 OLal104G","2000000","Ajalo Florence","cimage/fair.png","Good for the application of the loan","Pending","2021-11-17");


DROP TABLE IF EXISTS countries;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `alpha_2` varchar(200) NOT NULL DEFAULT '',
  `alpha_3` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=250 DEFAULT CHARSET=utf8;

INSERT INTO countries VALUES("1","Afghanistan","fl","afg");
INSERT INTO countries VALUES("2","Algeria","dz","dza");
INSERT INTO countries VALUES("3","Angola","ao","ago");
INSERT INTO countries VALUES("4","Cameroon","cm","cmr");


DROP TABLE IF EXISTS emp_permission;

CREATE TABLE `emp_permission` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `module_name` varchar(350) NOT NULL,
  `pcreate` varchar(20) NOT NULL,
  `pread` varchar(20) NOT NULL,
  `pupdate` varchar(20) NOT NULL,
  `pdelete` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

INSERT INTO emp_permission VALUES("34","1302","Email Panel","0","0","0","0");
INSERT INTO emp_permission VALUES("35","1302","Borrower Details","1","0","0","0");
INSERT INTO emp_permission VALUES("36","1302","Member Account","1","1","0","0");
INSERT INTO emp_permission VALUES("37","1302","Loan Details","0","0","0","0");
INSERT INTO emp_permission VALUES("38","1302","Internal Message","1","1","0","0");
INSERT INTO emp_permission VALUES("39","1302","Missed Payment","0","0","0","0");
INSERT INTO emp_permission VALUES("40","1302","Payment","1","0","0","0");
INSERT INTO emp_permission VALUES("41","1302","Member Details","0","0","0","0");
INSERT INTO emp_permission VALUES("42","1302","Module Permission","0","0","0","0");
INSERT INTO emp_permission VALUES("43","1302","Savings Account","1","1","0","0");
INSERT INTO emp_permission VALUES("44","1302","General Settings","0","0","0","0");
INSERT INTO emp_permission VALUES("45","1002","Email Panel","1","1","1","1");
INSERT INTO emp_permission VALUES("46","1002","Borrower Details","1","1","1","1");
INSERT INTO emp_permission VALUES("47","1002","Member Account","1","1","1","1");
INSERT INTO emp_permission VALUES("48","1002","Loan Details","1","1","1","1");
INSERT INTO emp_permission VALUES("49","1002","Internal Message","1","1","0","0");
INSERT INTO emp_permission VALUES("50","1002","Missed Payment","1","1","1","1");
INSERT INTO emp_permission VALUES("51","1002","Employee Details","1","1","1","1");
INSERT INTO emp_permission VALUES("52","1002","Payment","1","1","1","1");
INSERT INTO emp_permission VALUES("53","1002","Member Details","1","1","1","1");
INSERT INTO emp_permission VALUES("54","1002","Module Permission","1","1","1","1");
INSERT INTO emp_permission VALUES("55","1002","Savings Account","1","1","1","1");
INSERT INTO emp_permission VALUES("56","1002","General Settings","1","1","1","0");


DROP TABLE IF EXISTS emp_role;

CREATE TABLE `emp_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS etemplates;

CREATE TABLE `etemplates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(200) NOT NULL,
  `receiver_email` varchar(350) NOT NULL,
  `subject` varchar(350) NOT NULL,
  `msg` text NOT NULL,
  `time_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS faqs;

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO faqs VALUES("1","Please type the subject here","<p>Please Update Faqs Here</p>\n");


DROP TABLE IF EXISTS fin_info;

CREATE TABLE `fin_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `occupation` text NOT NULL,
  `mincome` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO fin_info VALUES("3","1","1023","","");
INSERT INTO fin_info VALUES("5","2","1023","Teacher","4000000");
INSERT INTO fin_info VALUES("6","3","1002","Banker","50000000");
INSERT INTO fin_info VALUES("7","5","1002","Teacher","8700000");
INSERT INTO fin_info VALUES("8","5","1002","Computer Operator","15000000");
INSERT INTO fin_info VALUES("9","5","1002","Trader","6000000");


DROP TABLE IF EXISTS footer;

CREATE TABLE `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `pho` varchar(200) NOT NULL,
  `face` varchar(200) NOT NULL,
  `webs` varchar(200) NOT NULL,
  `conh` varchar(200) NOT NULL,
  `twi` varchar(200) NOT NULL,
  `gplus` varchar(200) NOT NULL,
  `ins` varchar(200) NOT NULL,
  `yous` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `apply` text NOT NULL,
  `mission` text NOT NULL,
  `objective` text NOT NULL,
  `map` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO footer VALUES("2","dovefinance@gmail.com","+256393009970","www.facebook.com/dovefinance@gmail.com","www.dovefinace.com","Gulu UG","www.twitter.com/dovefinance@gmail.com","www.googleplus.com/odovefinance@gmail.com","www.in.com/dovefinance@gmail.com","www.youtube.com/dovefinance@gmail.com","About the system. \nDove Finance Institution is one of the microfinance institutions with the biggest challenge in running its services to the general community of Gulu. This is because members could\n not come physically to the office to register their collateral securities and neither it was difficult for the associate loan guarantor to go and follow up with the Loan of\n  all members who acquired loans.\n","Who may apply here. Thabnks","Mission here. Thanks","System OBJECTIVE HERE. Thanks","");


DROP TABLE IF EXISTS hiw;

CREATE TABLE `hiw` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `hiw` text NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO hiw VALUES("1","<p>We Provide Loans For Individual, Coperate and Many</p>\n");


DROP TABLE IF EXISTS loan_info;

CREATE TABLE `loan_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `borrower` varchar(200) NOT NULL,
  `baccount` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `amount` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `date_release` varchar(200) NOT NULL,
  `agent` varchar(200) NOT NULL,
  `g_name` varchar(200) NOT NULL,
  `g_phone` varchar(200) NOT NULL,
  `g_address` text NOT NULL,
  `rela` varchar(200) NOT NULL,
  `g_image` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  `pay_date` varchar(200) NOT NULL,
  `amount_topay` varchar(200) NOT NULL,
  `teller` varchar(200) NOT NULL,
  `remark` text NOT NULL,
  `upstatus` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO loan_info VALUES("1","1","0134405601","First Loan","150000","3 Months","05/21/2021","Admin","Mr Obita","09034543234","4, ade","Sister","img/","Disapproved","good","08/30/2021","185000","Admin","First Loan","Pending");


DROP TABLE IF EXISTS message;

CREATE TABLE `message` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(200) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `msg_to` varchar(200) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO message VALUES("4","1302","Abalo Florence","1002","Hello","<p>Good to see you</p>\n","2021-05-01 18:46:57");
INSERT INTO message VALUES("5","1002","Admin","1302","RE: Hello","<p>Thanks<br />\n-------------------------</p>\n\n<p>&nbsp;</p>\n\n<p>Good to see you</p>\n\n<p>&nbsp;</p>\n","2021-05-01 18:48:27");
INSERT INTO message VALUES("6","1302","Abalo Florence","1002","RE: RE: Hello","<p>Thanks&nbsp; you<br />\n-------------------------</p>\n\n<p>&nbsp;</p>\n\n<p>Thanks<br />\n-------------------------</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>Good to see you</p>\n\n<p>&nbsp;</p>\n","2021-05-01 18:49:18");


DROP TABLE IF EXISTS mywallet;

CREATE TABLE `mywallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `t_to` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL,
  `Desc` varchar(200) NOT NULL,
  `wtype` varchar(200) NOT NULL,
  `tdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

INSERT INTO mywallet VALUES("1","1023","NIL","500000","Given Loan","credit","2021-07-03 23:03:23");
INSERT INTO mywallet VALUES("2","0911","NIL","250000","Transfer to aa Partrick","transfer","2021-07-03 23:03:19");
INSERT INTO mywallet VALUES("3","0911","NIL","300000","Reverse 300k back","transfer","2021-07-03 23:03:14");
INSERT INTO mywallet VALUES("4","0911","NIL","150000","Additional payment","debit","2021-07-03 23:03:08");
INSERT INTO mywallet VALUES("5","0911","NIL","2600000","Deposits by Florence","debit","2021-07-03 23:03:02");
INSERT INTO mywallet VALUES("6","1002","NIL","100000","Loan Payment","credit","2021-07-03 23:02:51");
INSERT INTO mywallet VALUES("7","1002","1302","20000","Transfer to Florence","transfer","2021-07-03 22:58:16");
INSERT INTO mywallet VALUES("8","1002","1302","20000","Transfer to Florence","transfer","2021-07-05 15:39:58");


DROP TABLE IF EXISTS pay_schedule;

CREATE TABLE `pay_schedule` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `interest` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO pay_schedule VALUES("1","6","1002","05/30/2021","20000","2","30000");
INSERT INTO pay_schedule VALUES("2","4","1023","07/29/2021","200000","4","350000");


DROP TABLE IF EXISTS payment_schedule;

CREATE TABLE `payment_schedule` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `idm` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `term` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `interest` varchar(200) NOT NULL,
  `penalty` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO payment_schedule VALUES("1","11","1002","02938","Week","Daily","2","5");
INSERT INTO payment_schedule VALUES("2","5","1023","1234","Month","Weekly","1","3");


DROP TABLE IF EXISTS payments;

CREATE TABLE `payments` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `account` varchar(200) NOT NULL,
  `account_no` varchar(200) NOT NULL,
  `customer` varchar(200) NOT NULL,
  `loan` varchar(200) NOT NULL,
  `pay_date` varchar(200) NOT NULL,
  `amount_to_pay` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO payments VALUES("5","1002","199382731","5","5","1000000","05/30/2021","3000000","Payment for Abalo Florence");


DROP TABLE IF EXISTS sms;

CREATE TABLE `sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sms_gateway` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `api` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO sms VALUES("1","SMSTEAMS","optimum","optimum","http://smsteams.com/components/com_spc/smsapi.php?","NotActivated");


DROP TABLE IF EXISTS systemset;

CREATE TABLE `systemset` (
  `sysid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `footer` text NOT NULL,
  `abb` varchar(200) NOT NULL,
  `fax` text NOT NULL,
  `currency` text NOT NULL,
  `website` text NOT NULL,
  `mobile` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `map` text NOT NULL,
  `stamp` varchar(350) NOT NULL,
  `timezone` text NOT NULL,
  `sms_charges` varchar(200) NOT NULL,
  PRIMARY KEY (`sysid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO systemset VALUES("1","DFL | Loan Management System for Micro Finance Bank","Dove Finance Ltd Loan Management System","All Rights Reserved. 2021 (c)","DFL Loans","4217","UGX","https://www.dovefinaceltd.com","+256398100845","logo.png","Uganda Currency","godfreyobita029@gmail.com","IATA code:ULU","stamp.png","-10","40");


DROP TABLE IF EXISTS transaction;

CREATE TABLE `transaction` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `TID` varchar(200) NOT NULL,
  `t_type` varchar(200) NOT NULL COMMENT 'Deposit OR Withdraw',
  `acctno` varchar(200) NOT NULL,
  `fn` varchar(200) NOT NULL,
  `ln` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS twallet;

CREATE TABLE `twallet` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `Total` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO twallet VALUES("1","1002","3000000");
INSERT INTO twallet VALUES("2","1023","6000000");
INSERT INTO twallet VALUES("3","1000","5000000");
INSERT INTO twallet VALUES("4","1302","10000000");


DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `account_no` varchar(12) NOT NULL,
  `nin` varchar(15) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `age` varchar(3) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) NOT NULL,
  `marital` varchar(20) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `addr1` text NOT NULL,
  `addr2` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `role` varchar(200) NOT NULL,
  `reg_date` date DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","0130010003","CHK1128GJ790","Abalo Florence","florence@gmail.com",""," "," ","0000-00-00","","","+256770757769","Gulu Main market","Holy-Rojary Parish","Gulu City","Nothern Uganda","UG","  Good Â  Â  Â Â Â  Â Â Â","Abalo","YXQ=","1302","img/bull.jpg","","");
INSERT INTO user VALUES("2","0134405601","DXY447Q99R97J","Ongee Patrick","pato@gmail.com",""," "," ","0000-00-00","","","+256770757789","Gulu Main market","Centinary","Gulu City","Nothern Uganda","UG","  Good Â  Â  Â Â Â  Â Â Â","Ongee P","YXQ=","1023","img/stud3.jpg","","");
INSERT INTO user VALUES("4","0130000000","CM44K49802KL12","Admin","admin@admin.com",""," "," ","0000-00-00","","","0398100845","Dove Finance","Gulu Main","Gulu city","North","UG","The General Administrator","admin","YWRtaW4=","1002","img/owner.png","admin","");
INSERT INTO user VALUES("5","0130000001","CMHK49892902KL","Obita","obita@gmail.com",""," "," ","0000-00-00","","","+256772154012","Dove Finance","Kitgum Main","Kitgum Municipality","North","UG","Admin-Kitgum","Obita","YWRtaW4=","1000","img/stud4.jpg","admin","");


