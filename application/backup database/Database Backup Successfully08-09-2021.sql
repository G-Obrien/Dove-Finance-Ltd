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

INSERT INTO additional_fees VALUES("1","1","Loan=1907598678","Fine","2500");
INSERT INTO additional_fees VALUES("2","2","Loan=21319580","Late Payment","4000");
INSERT INTO additional_fees VALUES("3","3","Loan=21319580","","");
INSERT INTO additional_fees VALUES("4","5","Loan=21319580","Late Payment","4000");
INSERT INTO additional_fees VALUES("5","6","Loan=21319580","Late Payment","4000");
INSERT INTO additional_fees VALUES("6","4","Loan=21319581","Late Payment","4000");
INSERT INTO additional_fees VALUES("7","6","Loan=21319580","Fine","10000");


DROP TABLE IF EXISTS attachment;

CREATE TABLE `attachment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `attached_file` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO attachment VALUES("1","1","Loan=1907598678","document/4887_File_cryptos documentation.docx","2017-05-01 15:11:34");
INSERT INTO attachment VALUES("2","2","Loan=21319580","document/2782_File_Email.docx","2017-05-10 19:56:55");
INSERT INTO attachment VALUES("3","5","Loan=21319580","document/2045_File_Marksheet Management System.docx","2017-05-13 16:45:57");


DROP TABLE IF EXISTS backup;

CREATE TABLE `backup` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `tracking_id` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO backup VALUES("1","DFL-ClID=100012","0.1","Gulu-City12x39","2021-07-07 17:37:40");
INSERT INTO backup VALUES("2","DFL-ClID=100012","0.15","Gulu-City12x39","2021-07-07 19:59:36");


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

INSERT INTO battachment VALUES("1","1","Loan=1907598678","bdocument/5605_File_Below is the screenshot of the welcome mail sent to me when I registered with namecheap.docx","2017-05-01 20:30:28");
INSERT INTO battachment VALUES("2","1","Loan=1907598678","bdocument/2630_File_Below is the screenshot of the welcome mail sent to me when I registered with namecheap.docx","2017-05-01 20:32:52");
INSERT INTO battachment VALUES("3","2","Loan=1907598678","bdocument/6815_File_cryptos documentation.docx","2017-05-01 20:38:20");
INSERT INTO battachment VALUES("4","3","Loan=21319580","bdocument/2739_File_INTRODUCTION TO NIGERIA SOCIAL LIFE AND EARLY CIVILIZATION.docx","2017-05-01 22:35:25");
INSERT INTO battachment VALUES("5","4","Loan=21319580","bdocument/4525_File_ESTHER.docx","2017-05-13 16:32:51");


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

INSERT INTO borrowers VALUES("1","Ongee","Patrick","business2016@gmail.com","08033527716","FCE","Abeokuta","Ikeja","Lagos","110001","US","Application for loan","0034445657","1451.00","img/user3.png","2021-07-06 21:26:11","Pending");


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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO collateral VALUES("1","1","Loan=1907598678","Plot of land","Personal Land","Family origin","5 Hectares","Plot-13 A1004G","10000000","Patrict Ongee","img/bland.jpg","Verified");
INSERT INTO collateral VALUES("2","2","Loan=21319580","Bull/Cattle","Farm Cattle","personal","First Loan","Tag-CA206","900000","Grace Abalo","img/bull.jpg","Good old bull");
INSERT INTO collateral VALUES("3","5","Loan=21319580","Plot of Land","Land","Land","Land","Plot-10 OLal104G","2000000","Ajalo Florence","cimage/fair.png","Good for the application of the loan");


DROP TABLE IF EXISTS countries;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `alpha_2` varchar(200) NOT NULL DEFAULT '',
  `alpha_3` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=250 DEFAULT CHARSET=utf8;

INSERT INTO countries VALUES("1","Afghanistan","fl","afg");
INSERT INTO countries VALUES("2","Aland Islands","ax","ala");
INSERT INTO countries VALUES("3","Albania","al","alb");
INSERT INTO countries VALUES("4","Algeria","dz","dza");
INSERT INTO countries VALUES("5","American Samoa","as","asm");
INSERT INTO countries VALUES("6","Andorra","ad","and");
INSERT INTO countries VALUES("7","Angola","ao","ago");
INSERT INTO countries VALUES("8","Anguilla","ai","aia");
INSERT INTO countries VALUES("9","Antarctica","aq","ata");
INSERT INTO countries VALUES("10","Antigua and Barbuda","ag","atg");
INSERT INTO countries VALUES("11","Argentina","ar","arg");
INSERT INTO countries VALUES("12","Armenia","am","arm");
INSERT INTO countries VALUES("13","Aruba","aw","abw");
INSERT INTO countries VALUES("14","Australia","au","aus");
INSERT INTO countries VALUES("15","Austria","at","aut");
INSERT INTO countries VALUES("16","Azerbaijan","az","aze");
INSERT INTO countries VALUES("17","Bahamas","bs","bhs");
INSERT INTO countries VALUES("18","Bahrain","bh","bhr");
INSERT INTO countries VALUES("19","Bangladesh","bd","bgd");
INSERT INTO countries VALUES("20","Barbados","bb","brb");
INSERT INTO countries VALUES("21","Belarus","by","blr");
INSERT INTO countries VALUES("22","Belgium","be","bel");
INSERT INTO countries VALUES("23","Belize","bz","blz");
INSERT INTO countries VALUES("24","Benin","bj","ben");
INSERT INTO countries VALUES("25","Bermuda","bm","bmu");
INSERT INTO countries VALUES("26","Bhutan","bt","btn");
INSERT INTO countries VALUES("27","Bolivia, Plurinational State of","bo","bol");
INSERT INTO countries VALUES("28","Bonaire, Sint Eustatius and Saba","bq","bes");
INSERT INTO countries VALUES("29","Bosnia and Herzegovina","ba","bih");
INSERT INTO countries VALUES("30","Botswana","bw","bwa");
INSERT INTO countries VALUES("31","Bouvet Island","bv","bvt");
INSERT INTO countries VALUES("32","Brazil","br","bra");
INSERT INTO countries VALUES("33","British Indian Ocean Territory","io","iot");
INSERT INTO countries VALUES("34","Brunei Darussalam","bn","brn");
INSERT INTO countries VALUES("35","Bulgaria","bg","bgr");
INSERT INTO countries VALUES("36","Burkina Faso","bf","bfa");
INSERT INTO countries VALUES("37","Burundi","bi","bdi");
INSERT INTO countries VALUES("38","Cambodia","kh","khm");
INSERT INTO countries VALUES("39","Cameroon","cm","cmr");
INSERT INTO countries VALUES("40","Canada","ca","can");
INSERT INTO countries VALUES("41","Cape Verde","cv","cpv");
INSERT INTO countries VALUES("42","Cayman Islands","ky","cym");
INSERT INTO countries VALUES("43","Central African Republic","cf","caf");
INSERT INTO countries VALUES("44","Chad","td","tcd");
INSERT INTO countries VALUES("45","Chile","cl","chl");
INSERT INTO countries VALUES("46","China","cn","chn");
INSERT INTO countries VALUES("47","Christmas Island","cx","cxr");
INSERT INTO countries VALUES("48","Cocos (Keeling) Islands","cc","cck");
INSERT INTO countries VALUES("49","Colombia","co","col");
INSERT INTO countries VALUES("50","Comoros","km","com");
INSERT INTO countries VALUES("51","Congo","cg","cog");
INSERT INTO countries VALUES("52","Congo, The Democratic Republic of the","cd","cod");
INSERT INTO countries VALUES("53","Cook Islands","ck","cok");
INSERT INTO countries VALUES("54","Costa Rica","cr","cri");
INSERT INTO countries VALUES("55","Cote d\'Ivoire","ci","civ");
INSERT INTO countries VALUES("56","Croatia","hr","hrv");
INSERT INTO countries VALUES("57","Cuba","cu","cub");
INSERT INTO countries VALUES("58","Curacao","cw","cuw");
INSERT INTO countries VALUES("59","Cyprus","cy","cyp");
INSERT INTO countries VALUES("60","Czech Republic","cz","cze");
INSERT INTO countries VALUES("61","Denmark","dk","dnk");
INSERT INTO countries VALUES("62","Djibouti","dj","dji");
INSERT INTO countries VALUES("63","Dominica","dm","dma");
INSERT INTO countries VALUES("64","Dominican Republic","do","dom");
INSERT INTO countries VALUES("65","Ecuador","ec","ecu");
INSERT INTO countries VALUES("66","Egypt","eg","egy");
INSERT INTO countries VALUES("67","El Salvador","sv","slv");
INSERT INTO countries VALUES("68","Equatorial Guinea","gq","gnq");
INSERT INTO countries VALUES("69","Eritrea","er","eri");
INSERT INTO countries VALUES("70","Estonia","ee","est");
INSERT INTO countries VALUES("71","Ethiopia","et","eth");
INSERT INTO countries VALUES("72","Falkland Islands (Malvinas)","fk","flk");
INSERT INTO countries VALUES("73","Faroe Islands","fo","fro");
INSERT INTO countries VALUES("74","Fiji","fj","fji");
INSERT INTO countries VALUES("75","Finland","fi","fin");
INSERT INTO countries VALUES("76","France","fr","fra");
INSERT INTO countries VALUES("77","French Guiana","gf","guf");
INSERT INTO countries VALUES("78","French Polynesia","pf","pyf");
INSERT INTO countries VALUES("79","French Southern Territories","tf","atf");
INSERT INTO countries VALUES("80","Gabon","ga","gab");
INSERT INTO countries VALUES("81","Gambia","gm","gmb");
INSERT INTO countries VALUES("82","Georgia","ge","geo");
INSERT INTO countries VALUES("83","Germany","de","deu");
INSERT INTO countries VALUES("84","Ghana","gh","gha");
INSERT INTO countries VALUES("85","Gibraltar","gi","gib");
INSERT INTO countries VALUES("86","Greece","gr","grc");
INSERT INTO countries VALUES("87","Greenland","gl","grl");
INSERT INTO countries VALUES("88","Grenada","gd","grd");
INSERT INTO countries VALUES("89","Guadeloupe","gp","glp");
INSERT INTO countries VALUES("90","Guam","gu","gum");
INSERT INTO countries VALUES("91","Guatemala","gt","gtm");
INSERT INTO countries VALUES("92","Guernsey","gg","ggy");
INSERT INTO countries VALUES("93","Guinea","gn","gin");
INSERT INTO countries VALUES("94","Guinea-Bissau","gw","gnb");
INSERT INTO countries VALUES("95","Guyana","gy","guy");
INSERT INTO countries VALUES("96","Haiti","ht","hti");
INSERT INTO countries VALUES("97","Heard Island and McDonald Islands","hm","hmd");
INSERT INTO countries VALUES("98","Holy See (Vatican City State)","va","vat");
INSERT INTO countries VALUES("99","Honduras","hn","hnd");
INSERT INTO countries VALUES("100","Hong Kong","hk","hkg");
INSERT INTO countries VALUES("101","Hungary","hu","hun");
INSERT INTO countries VALUES("102","Iceland","is","isl");
INSERT INTO countries VALUES("103","India","in","ind");
INSERT INTO countries VALUES("104","Indonesia","id","idn");
INSERT INTO countries VALUES("105","Iran, Islamic Republic of","ir","irn");
INSERT INTO countries VALUES("106","Iraq","iq","irq");
INSERT INTO countries VALUES("107","Ireland","ie","irl");
INSERT INTO countries VALUES("108","Isle of Man","im","imn");
INSERT INTO countries VALUES("109","Israel","il","isr");
INSERT INTO countries VALUES("110","Italy","it","ita");
INSERT INTO countries VALUES("111","Jamaica","jm","jam");
INSERT INTO countries VALUES("112","Japan","jp","jpn");
INSERT INTO countries VALUES("113","Jersey","je","jey");
INSERT INTO countries VALUES("114","Jordan","jo","jor");
INSERT INTO countries VALUES("115","Kazakhstan","kz","kaz");
INSERT INTO countries VALUES("116","Kenya","ke","ken");
INSERT INTO countries VALUES("117","Kiribati","ki","kir");
INSERT INTO countries VALUES("118","Korea, Democratic People\'s Republic of","kp","prk");
INSERT INTO countries VALUES("119","Korea, Republic of","kr","kor");
INSERT INTO countries VALUES("120","Kuwait","kw","kwt");
INSERT INTO countries VALUES("121","Kyrgyzstan","kg","kgz");
INSERT INTO countries VALUES("122","Lao People\'s Democratic Republic","la","lao");
INSERT INTO countries VALUES("123","Latvia","lv","lva");
INSERT INTO countries VALUES("124","Lebanon","lb","lbn");
INSERT INTO countries VALUES("125","Lesotho","ls","lso");
INSERT INTO countries VALUES("126","Liberia","lr","lbr");
INSERT INTO countries VALUES("127","Libyan Arab Jamahiriya","ly","lby");
INSERT INTO countries VALUES("128","Liechtenstein","li","lie");
INSERT INTO countries VALUES("129","Lithuania","lt","ltu");
INSERT INTO countries VALUES("130","Luxembourg","lu","lux");
INSERT INTO countries VALUES("131","Macao","mo","mac");
INSERT INTO countries VALUES("132","Macedonia, The former Yugoslav Republic of","mk","mkd");
INSERT INTO countries VALUES("133","Madagascar","mg","mdg");
INSERT INTO countries VALUES("134","Malawi","mw","mwi");
INSERT INTO countries VALUES("135","Malaysia","my","mys");
INSERT INTO countries VALUES("136","Maldives","mv","mdv");
INSERT INTO countries VALUES("137","Mali","ml","mli");
INSERT INTO countries VALUES("138","Malta","mt","mlt");
INSERT INTO countries VALUES("139","Marshall Islands","mh","mhl");
INSERT INTO countries VALUES("140","Martinique","mq","mtq");
INSERT INTO countries VALUES("141","Mauritania","mr","mrt");
INSERT INTO countries VALUES("142","Mauritius","mu","mus");
INSERT INTO countries VALUES("143","Mayotte","yt","myt");
INSERT INTO countries VALUES("144","Mexico","mx","mex");
INSERT INTO countries VALUES("145","Micronesia, Federated States of","fm","fsm");
INSERT INTO countries VALUES("146","Moldova, Republic of","md","mda");
INSERT INTO countries VALUES("147","Monaco","mc","mco");
INSERT INTO countries VALUES("148","Mongolia","mn","mng");
INSERT INTO countries VALUES("149","Montenegro","me","mne");
INSERT INTO countries VALUES("150","Montserrat","ms","msr");
INSERT INTO countries VALUES("151","Morocco","ma","mar");
INSERT INTO countries VALUES("152","Mozambique","mz","moz");
INSERT INTO countries VALUES("153","Myanmar","mm","mmr");
INSERT INTO countries VALUES("154","Namibia","na","nam");
INSERT INTO countries VALUES("155","Nauru","nr","nru");
INSERT INTO countries VALUES("156","Nepal","np","npl");
INSERT INTO countries VALUES("157","Netherlands","nl","nld");
INSERT INTO countries VALUES("158","New Caledonia","nc","ncl");
INSERT INTO countries VALUES("159","New Zealand","nz","nzl");
INSERT INTO countries VALUES("160","Nicaragua","ni","nic");
INSERT INTO countries VALUES("161","Niger","ne","ner");
INSERT INTO countries VALUES("162","Nigeria","ng","nga");
INSERT INTO countries VALUES("163","Niue","nu","niu");
INSERT INTO countries VALUES("164","Norfolk Island","nf","nfk");
INSERT INTO countries VALUES("165","Northern Mariana Islands","mp","mnp");
INSERT INTO countries VALUES("166","Norway","no","nor");
INSERT INTO countries VALUES("167","Oman","om","omn");
INSERT INTO countries VALUES("168","Pakistan","pk","pak");
INSERT INTO countries VALUES("169","Palau","pw","plw");
INSERT INTO countries VALUES("170","Palestinian Territory, Occupied","ps","pse");
INSERT INTO countries VALUES("171","Panama","pa","pan");
INSERT INTO countries VALUES("172","Papua New Guinea","pg","png");
INSERT INTO countries VALUES("173","Paraguay","py","pry");
INSERT INTO countries VALUES("174","Peru","pe","per");
INSERT INTO countries VALUES("175","Philippines","ph","phl");
INSERT INTO countries VALUES("176","Pitcairn","pn","pcn");
INSERT INTO countries VALUES("177","Poland","pl","pol");
INSERT INTO countries VALUES("178","Portugal","pt","prt");
INSERT INTO countries VALUES("179","Puerto Rico","pr","pri");
INSERT INTO countries VALUES("180","Qatar","qa","qat");
INSERT INTO countries VALUES("181","Reunion","re","reu");
INSERT INTO countries VALUES("182","Romania","ro","rou");
INSERT INTO countries VALUES("183","Russian Federation","ru","rus");
INSERT INTO countries VALUES("184","Rwanda","rw","rwa");
INSERT INTO countries VALUES("185","Saint Barthelemy","bl","blm");
INSERT INTO countries VALUES("186","Saint Helena, Ascension and Tristan Da Cunha","sh","shn");
INSERT INTO countries VALUES("187","Saint Kitts and Nevis","kn","kna");
INSERT INTO countries VALUES("188","Saint Lucia","lc","lca");
INSERT INTO countries VALUES("189","Saint Martin (French Part)","mf","maf");
INSERT INTO countries VALUES("190","Saint Pierre and Miquelon","pm","spm");
INSERT INTO countries VALUES("191","Saint Vincent and The Grenadines","vc","vct");
INSERT INTO countries VALUES("192","Samoa","ws","wsm");
INSERT INTO countries VALUES("193","San Marino","sm","smr");
INSERT INTO countries VALUES("194","Sao Tome and Principe","st","stp");
INSERT INTO countries VALUES("195","Saudi Arabia","sa","sau");
INSERT INTO countries VALUES("196","Senegal","sn","sen");
INSERT INTO countries VALUES("197","Serbia","rs","srb");
INSERT INTO countries VALUES("198","Seychelles","sc","syc");
INSERT INTO countries VALUES("199","Sierra Leone","sl","sle");
INSERT INTO countries VALUES("200","Singapore","sg","sgp");
INSERT INTO countries VALUES("201","Sint Maarten (Dutch Part)","sx","sxm");
INSERT INTO countries VALUES("202","Slovakia","sk","svk");
INSERT INTO countries VALUES("203","Slovenia","si","svn");
INSERT INTO countries VALUES("204","Solomon Islands","sb","slb");
INSERT INTO countries VALUES("205","Somalia","so","som");
INSERT INTO countries VALUES("206","South Africa","za","zaf");
INSERT INTO countries VALUES("207","South Georgia and The South Sandwich Islands","gs","sgs");
INSERT INTO countries VALUES("208","South Sudan","ss","ssd");
INSERT INTO countries VALUES("209","Spain","es","esp");
INSERT INTO countries VALUES("210","Sri Lanka","lk","lka");
INSERT INTO countries VALUES("211","Sudan","sd","sdn");
INSERT INTO countries VALUES("212","Suriname","sr","sur");
INSERT INTO countries VALUES("213","Svalbard and Jan Mayen","sj","sjm");
INSERT INTO countries VALUES("214","Swaziland","sz","swz");
INSERT INTO countries VALUES("215","Sweden","se","swe");
INSERT INTO countries VALUES("216","Switzerland","ch","che");
INSERT INTO countries VALUES("217","Syrian Arab Republic","sy","syr");
INSERT INTO countries VALUES("218","Taiwan, Province of China","tw","twn");
INSERT INTO countries VALUES("219","Tajikistan","tj","tjk");
INSERT INTO countries VALUES("220","Tanzania, United Republic of","tz","tza");
INSERT INTO countries VALUES("221","Thailand","th","tha");
INSERT INTO countries VALUES("222","Timor-Leste","tl","tls");
INSERT INTO countries VALUES("223","Togo","tg","tgo");
INSERT INTO countries VALUES("224","Tokelau","tk","tkl");
INSERT INTO countries VALUES("225","Tonga","to","ton");
INSERT INTO countries VALUES("226","Trinidad and Tobago","tt","tto");
INSERT INTO countries VALUES("227","Tunisia","tn","tun");
INSERT INTO countries VALUES("228","Turkey","tr","tur");
INSERT INTO countries VALUES("229","Turkmenistan","tm","tkm");
INSERT INTO countries VALUES("230","Turks and Caicos Islands","tc","tca");
INSERT INTO countries VALUES("231","Tuvalu","tv","tuv");
INSERT INTO countries VALUES("232","Uganda","ug","uga");
INSERT INTO countries VALUES("233","Ukraine","ua","ukr");
INSERT INTO countries VALUES("234","United Arab Emirates","ae","are");
INSERT INTO countries VALUES("235","United Kingdom","gb","gbr");
INSERT INTO countries VALUES("236","United States","us","usa");
INSERT INTO countries VALUES("237","United States Minor Outlying Islands","um","umi");
INSERT INTO countries VALUES("238","Uruguay","uy","ury");
INSERT INTO countries VALUES("239","Uzbekistan","uz","uzb");
INSERT INTO countries VALUES("240","Vanuatu","vu","vut");
INSERT INTO countries VALUES("241","Venezuela, Bolivarian Republic of","ve","ven");
INSERT INTO countries VALUES("242","Viet Nam","vn","vnm");
INSERT INTO countries VALUES("243","Virgin Islands, British","vg","vgb");
INSERT INTO countries VALUES("244","Virgin Islands, U.S.","vi","vir");
INSERT INTO countries VALUES("245","Wallis and Futuna","wf","wlf");
INSERT INTO countries VALUES("246","Western Sahara","eh","esh");
INSERT INTO countries VALUES("247","Yemen","ye","yem");
INSERT INTO countries VALUES("248","Zambia","zm","zmb");
INSERT INTO countries VALUES("249","Zimbabwe","zw","zwe");


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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

INSERT INTO emp_permission VALUES("34","DFL-ClID=100012","Email Panel","0","0","0","0");
INSERT INTO emp_permission VALUES("35","DFL-ClID=100012","Borrower Details","1","0","0","0");
INSERT INTO emp_permission VALUES("36","DFL-ClID=100012","Employee Wallet","1","1","0","0");
INSERT INTO emp_permission VALUES("37","DFL-ClID=100012","Loan Details","0","0","0","0");
INSERT INTO emp_permission VALUES("38","DFL-ClID=100012","Internal Message","1","1","0","0");
INSERT INTO emp_permission VALUES("39","DFL-ClID=100012","Missed Payment","0","0","0","0");
INSERT INTO emp_permission VALUES("40","DFL-ClID=100012","Payment","1","0","0","0");
INSERT INTO emp_permission VALUES("41","DFL-ClID=100012","Employee Details","0","0","0","0");
INSERT INTO emp_permission VALUES("42","DFL-ClID=100012","Module Permission","0","0","0","0");
INSERT INTO emp_permission VALUES("43","DFL-ClID=100012","Savings Account","1","1","0","0");
INSERT INTO emp_permission VALUES("44","DFL-ClID=100012","General Settings","0","0","0","0");
INSERT INTO emp_permission VALUES("45","Loan=21319580","Email Panel","1","1","1","1");
INSERT INTO emp_permission VALUES("46","Loan=21319580","Borrower Details","1","1","1","1");
INSERT INTO emp_permission VALUES("47","Loan=21319580","Employee Wallet","1","1","1","1");
INSERT INTO emp_permission VALUES("48","Loan=21319580","Loan Details","1","1","1","1");
INSERT INTO emp_permission VALUES("49","Loan=21319580","Internal Message","1","1","0","0");
INSERT INTO emp_permission VALUES("50","Loan=21319580","Missed Payment","1","1","1","1");
INSERT INTO emp_permission VALUES("51","Loan=21319580","Payment","1","1","1","1");
INSERT INTO emp_permission VALUES("52","Loan=21319580","Employee Details","1","1","1","1");
INSERT INTO emp_permission VALUES("53","Loan=21319580","Module Permission","1","1","1","1");
INSERT INTO emp_permission VALUES("54","Loan=21319580","Savings Account","1","1","1","1");
INSERT INTO emp_permission VALUES("55","Loan=21319580","General Settings","1","1","1","0");


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

INSERT INTO faqs VALUES("1","Please type the subject here","<p>Please Update Faqs Here</p>
\n");


DROP TABLE IF EXISTS fin_info;

CREATE TABLE `fin_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `occupation` text NOT NULL,
  `mincome` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO fin_info VALUES("3","1","Loan=1907598678","","");
INSERT INTO fin_info VALUES("5","2","Loan=1907598678","Teacher","4000000");
INSERT INTO fin_info VALUES("6","3","Loan=21319580","Banker","50000000");
INSERT INTO fin_info VALUES("7","5","Loan=21319580","Teacher","8700000");
INSERT INTO fin_info VALUES("8","5","Loan=21319580","Computer Operator","15000000");
INSERT INTO fin_info VALUES("9","5","Loan=21319580","Trader","6000000");


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

INSERT INTO footer VALUES("2","dovefinance@gmail.com","+256399009970","www.facebook.com/dovefinance@gmail.com","www.dovefinace.com","Gulu UG","www.twitter.com/dovefinance@gmail.com","www.googleplus.com/odovefinance@gmail.com","www.in.com/dovefinance@gmail.com","www.youtube.com/dovefinance@gmail.com","About the system. \nDove Finance Institution is one of the microfinance institutions with the biggest challenge in running its services to the general community of Gulu. This is because members could\n not come physically to the office to register their collateral securities and neither it was difficult for the associate loan guarantor to go and follow up with the Loan of\n  all members who acquired loans.\n","Who may apply here. Thabnks","Mission here. Thanks","System OBJECTIVE HERE. Thanks","");


DROP TABLE IF EXISTS hiw;

CREATE TABLE `hiw` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `hiw` text NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO hiw VALUES("1","<p>We Provide Loans For Individual, Coperate and Many</p>
\n");


DROP TABLE IF EXISTS loan_info;

CREATE TABLE `loan_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `borrower` varchar(200) NOT NULL,
  `baccount` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `amount` varchar(200) NOT NULL,
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

INSERT INTO loan_info VALUES("7","5","--Select Customer--","new loan","500000","06/21/2017","Admin","Mr Segun","09034543234","4, ade","GFriend","img/","Disapproved","good","10/31/2017","1000000","Admin","new loan","Pending");


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

INSERT INTO message VALUES("4","DFL-ClID=100012","au Florence","Loan=21319580","Hello","<p>Good to see you</p>
\n","2017-05-01 21:46:57");
INSERT INTO message VALUES("5","Loan=21319580","Admin","DFL-ClID=100012","RE: Hello","<p>Thanks<br />
\n-------------------------</p>
\n
\n<p>&nbsp;</p>
\n
\n<p>Good to see you</p>
\n
\n<p>&nbsp;</p>
\n","2017-05-01 21:48:27");
INSERT INTO message VALUES("6","DFL-ClID=100012","au Florence","Loan=21319580","RE: RE: Hello","<p>Thanks&nbsp; you<br />
\n-------------------------</p>
\n
\n<p>&nbsp;</p>
\n
\n<p>Thanks<br />
\n-------------------------</p>
\n
\n<p>&nbsp;</p>
\n
\n<p>&nbsp;</p>
\n
\n<p>Good to see you</p>
\n
\n<p>&nbsp;</p>
\n","2017-05-01 21:49:18");


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
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

INSERT INTO mywallet VALUES("1","Loan=1907598678","NIL","500000","Given Loan","credit","2021-07-04 02:03:23");
INSERT INTO mywallet VALUES("2","Cryptos?rid=453536","NIL","250000","Transfer to aa Partrick","transfer","2021-07-04 02:03:19");
INSERT INTO mywallet VALUES("3","Cryptos?rid=453536","NIL","300000","Reverse 300k back","transfer","2021-07-04 02:03:14");
INSERT INTO mywallet VALUES("4","Cryptos?rid=453536","NIL","150000","Additional payment","debit","2021-07-04 02:03:08");
INSERT INTO mywallet VALUES("5","Cryptos?rid=453536","NIL","2600000","Deposits by Florence","debit","2021-07-04 02:03:02");
INSERT INTO mywallet VALUES("6","Loan=21319580","NIL","2400000","Give loan","debit","2021-07-04 02:02:57");
INSERT INTO mywallet VALUES("7","Loan=21319580","NIL","100000","Loan Payment","credit","2021-07-04 02:02:51");
INSERT INTO mywallet VALUES("8","Loan=21319580","DFL-ClID=100012","20000","Transfer to Florence","transfer","2021-07-04 01:58:16");
INSERT INTO mywallet VALUES("9","Loan=21319580","DFL-ClID=100012","15000","Transfer money","transfer","2021-07-04 01:58:34");
INSERT INTO mywallet VALUES("10","Loan=21319580","NIL","52500","Loan due","credit","2021-07-04 02:05:19");
INSERT INTO mywallet VALUES("11","Loan=21319580","NIL","10500","Add Payment","debit","2021-07-04 02:04:46");
INSERT INTO mywallet VALUES("12","Loan=21319580","DFL-ClID=100012","20000","Transfer to Florence","transfer","2021-07-05 18:39:58");
INSERT INTO mywallet VALUES("69","Loan=21319580","Loan=21319581","4900","transfar","transfer","2021-08-09 12:14:58");
INSERT INTO mywallet VALUES("70","Loan=21319580","NIL","3000000","Deposit","debit","2021-08-09 12:15:57");


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

INSERT INTO pay_schedule VALUES("1","6","Loan=21319580","12/30/2021","200","2","50");


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

INSERT INTO payment_schedule VALUES("10","11","Loan=21319580","kjnk","Week","Daily","2","5");


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

INSERT INTO payments VALUES("5","Loan=21319580","199382731","5","5","1000000","05/30/2017","3000000","Payment for Doris Micheal");


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

INSERT INTO systemset VALUES("1","Advance Loan / Lending Management System with SMS Notification & Saving System for Micro Finance Bank","NIR Loan Management System for Micro Finance Bank","All rights reserved. 2017 (c)","NIR Loan","23459","$","https://www.critechglobal.com","+13238922757","../img/ass.png","Ghana Currency									","critech.getresponse@gmail.com","Map Code Here				","stamp.jpg","3","25");


DROP TABLE IF EXISTS transaction;

CREATE TABLE `transaction` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `txid` varchar(200) NOT NULL,
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

INSERT INTO transaction VALUES("1","TXID-35663574","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","2000","2017-12-23 17:57:20");
INSERT INTO transaction VALUES("2","TXID-48939392","Deposit","20000","Doris","Micheal","segtism@gmail.com","+1564783934","1525","2017-12-23 17:57:26");
INSERT INTO transaction VALUES("3","TXID-73095459","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","250","2017-12-23 17:57:31");
INSERT INTO transaction VALUES("4","TXID-94293702","Withdraw","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","200","2017-12-23 18:46:34");
INSERT INTO transaction VALUES("5","TXID-50934204","Withdraw","20000","Doris","Micheal","segtism@gmail.com","+1564783934","20","2017-12-23 19:02:16");
INSERT INTO transaction VALUES("6","TXID-38992248","Withdraw","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","20","2017-12-23 19:31:34");
INSERT INTO transaction VALUES("7","TXID-39031128","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","35","2021-07-06 20:32:07");
INSERT INTO transaction VALUES("8","TXID-84875916","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","25","2021-07-06 20:35:58");
INSERT INTO transaction VALUES("9","TXID-45293701","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","55","2021-07-06 20:48:19");
INSERT INTO transaction VALUES("10","TXID-84558899","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","10","2021-07-06 20:49:51");
INSERT INTO transaction VALUES("11","TXID-99934205","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","33","2021-07-06 20:50:29");
INSERT INTO transaction VALUES("12","TXID-89936219","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","42","2021-07-06 20:51:15");
INSERT INTO transaction VALUES("13","TXID-64374512","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","20","2021-07-06 20:57:03");
INSERT INTO transaction VALUES("14","TXID-87992249","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","39","2021-07-06 20:58:39");
INSERT INTO transaction VALUES("15","TXID-39294311","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","87","2021-07-06 21:00:23");
INSERT INTO transaction VALUES("16","TXID-76812928","Deposit","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","100","2021-07-06 21:03:50");
INSERT INTO transaction VALUES("17","TXID-12060791","Withdraw","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","250","2021-07-06 21:21:37");
INSERT INTO transaction VALUES("18","TXID-51421692","Withdraw","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","200","2021-07-06 21:25:02");
INSERT INTO transaction VALUES("19","TXID-28228637","Withdraw","0034445657","Ongee","Patrick","business2016@gmail.com","08033527716","50","2021-07-06 21:26:11");

nin
DROP TABLE IF EXISTS twallet;

CREATE TABLE `twallet` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `Total` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO twallet VALUES("10","Loan=21319580","2996125");
INSERT INTO twallet VALUES("12","DFL-ClID=100012","550");
INSERT INTO twallet VALUES("13","Loan=21319581","4900");


DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `addr1` text NOT NULL,
  `addr2` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `nin` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=483 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","Abalo Florence","florence@gmail.com","+256770757769","Gulu Main market","Holy-Rojary Parish","Gulu City","Nothern Uganda","141144","UG","  Good           �","Abalo","YXQ=","DFL-ClID=100012","img/user3.png","");
INSERT INTO user VALUES("2","Ongee Patrick","pato@gmail.com","+256770757789","Gulu Main market","Centinary","Gulu City","Nothern Uganda","141142","UG","  Good           �","Ongee P","YXQ=","Loan=1907598678","img/user.png","");
INSERT INTO user VALUES("4","Admin","admin@admin.com","0398100845","Dove Finance","Gulu Main","Gulu city","North","141140","UG","This is admin","admin","YWRtaW4=","Loan=21319580","img/owner.png","admin");
INSERT INTO user VALUES("5","Obita","obita@gmail.com","+256772154012","Dove Finance","Kitgum Main","Kitgum Municipality","North","1411141","UG","Admin-Kitgum","Obita","YWRtaW4=","Loan=21319581","img/admin.jpg","admin");


