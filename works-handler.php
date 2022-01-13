<?php
   function getPortfolio($portfolioId) {

       switch ($portfolioId) {

           case "kistWeb":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'web',
                       'Web Development',
                       'In 2015, i joined karume institute of science and technology on Diploma in Computer engineering<br/><br/>
                                I noticed there was not good or even functional website at our institute. So my first year practical training 
                                  i learned how to do web design from scratch using html, css na javascipt and then i proceed to buid this website.
                                  <br/><br/> Later, i talked to one of my lecturers to host it and it was the first functional website on my institute at 2016',
                       'Website Design for Karume Institute of Science and Technology',
                       'Karume Institute of Science and Technology',
                       '01-03-2016',
                       'Institute Website Design',
                       'http://kist.nafuutronics.com',
                       array('kist.png', 'kist2.jpg', 'kist3.jpg', 'kist4.jpg')
                   );
               return $portpolio;
               break;

           case "koas":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'web',
                       'Web Development',
                       'This system is integrated with TCU, NECTA and NACTE to allow online admission for diploma and degree students',
                       'Online Admission System for KIST',
                       'Karume Institute of Science and Technology',
                       '01-07-2017',
                       'Online Admission System',
                       'http://kistoas.nafuutronics.com',
                       array('koas.png', 'koas-2.png', 'koas-3.png', 'koas-4.png')
                   );
               return $portpolio;
               break;

           case "homeAutomation":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'iot',
                       'Embedded and IOT',
                       'This was my final year project at karume institute of science and technology which was home automation system that allow home appliance to be controlled by android application through bluetooth interface :)',
                       'Final year project for Diploma in Computer Engineering Student',
                       'Ali Saleh (KIST)',
                       '01-12-2017',
                       'Home Automation System',
                       '#',
                       array('home.jpg', '', '', '')
                   );
               return $portpolio;
               break;

//               bcrs system [username=>demo, password=>demo12345#]
           case "bcrs":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'web',
                       'Web Development',
                       'System was designed to operate on Ministry of Birth and Death - Zanzibar to allow easy access to certificates of births that enables hospitals to register births of children and share the information directly to ministry of births<br/>
                                <br/> Mother of children will be given an ID of his/her child that will enables her to go directly to ministry and request the certificate, this will reduce time for ministry to fill information because every information will be already filled at the hospital',
                       'Final year project for Diploma in Computer Engineering Student',
                       'Khairat (KIST Student)',
                       '05-01-2018',
                       'Birth Certificate Registration System',
                       'http://bcrs.nafuutronics.com',
                       array('bcrs.png', 'bcrs1.png', 'bcrs2.png', 'bcrs3.png')
                   );
               return $portpolio;
               break;


//               osr system
           case "kosr":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'web',
                       'Web Development',
                       'This is online student records, which allows to keep records of students, lecturers and other important information in record system such as payment clearence and results of students, It also has very comprehesive set of reports for printing results, statement of results, transcripts and so on.',
                       'Online Result Management System for KIST',
                       'Karume Institute of Science and Technology',
                       '03-03-2018',
                       'KIST Online Student Results',
                       'http://kistosr.nafuutronics.com',
                       array('osr.png', 'osr-2.png', 'osr-3.png', '')
                   );
               return $portpolio;
               break;

           case "planePackingDetection":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'iot',
                       'Embedded and IOT',
                       '',
                       'Final Year Project for BSc. in Aircraft Maintenance',
                       'Issa (FYP)',
                       '20-01-2019',
                       'Plane Packing Detection',
                       '#',
                       array('plane1.jpg', 'plane2.jpg', 'plane3.jpg', 'plane4.jpg')
                   );
               return $portpolio;
               break;
               
           case "smartDustbin":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'iot',
                       'Embedded and IOT',
                       'This system tracks level of trash in dustbins and notify the authority when bins are almost full and when they are full.',
                       'Final Year Project',
                       'Judith (FYP)',
                       '21-03-2019',
                       'Smart Dustbin',
                       '#',
                       array('dust1.jpg', 'dust2.jpg', 'dust3.jpg', '')
                   );
               return $portpolio;
               break;

           case "docManager":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'web',
                       'Web Development',
                       'System was developed to store ministry documents to allow easy access to all documents and encrypt some credential document to non authorized user, this was my first project request from ministry of
                            infrastructure back at 2017',
                       'Secure Local Document Manager for MOICT',
                       'Ministry of Infrastructure, Communication and Transportation',
                       '11-04-2017',
                       'Document Manager',
                       'http://docmanager.nafuutronics.com',
                       array('docManager1.jpg', 'docManager2.jpg', 'docManager3.jpg', 'docManager4.jpg')
                   );
               return $portpolio;
               break;

           case "zanIslandCarHire":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'web',
                       'Web Development',
                       'This system provides an easy way to rent car in zanzibar with only three easy steps, first your select pickup and dropoff place and date, then you choose car of your choise, finally you fill in the details and you are done.',
                       'ZanIsland Car Hire',
                       'Kamal Simba',
                       '04-07-2018',
                       'ZanIsland Car Hire',
                       'http://zanislandcarhire.nafuutronics.com',
                       array('zanIslandCarHire.jpg', 'zanIslandCarHire2.jpg', 'zanIslandCarHire3.jpg', 'zanIslandCarHire4.jpg')
                   );
               return $portpolio;
               break;

           case "irims":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'web',
                       'Web Development',
                       'This system was developed to allow easy way to buy tickets for BRT and trains in tanzania, it has been integrated with paypal SDK for DEMO purposes but can easily be integrated with mobile payments.',
                       'Online Ticketing System for BRT',
                       'Abubakar (FYP)',
                       '04-01-2019',
                       'BRT TICKETING SYSTEN',
                       'http://irims.nafuutronics.com',
                       array('irims.png', 'irims2.jpg', 'irims3.jpg', 'irims4.jpg')
                   );
               return $portpolio;
               break;

           case "ssims":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'web',
                       'Web Development',
                       'This system will enable citizens to write their problems to the leaders of a particular district/region and provide community like platform between citizens and authority.',
                       'Social Services Information Management System',
                       '_',
                       '10-02-2019',
                       'Social Services Information System',
                       'http://ssims.nafuutronics.com',
                       array('ssims.png', 'ssims-2.png', 'ssims-3.png', 'ssims-4.png')
                   );
               return $portpolio;
               break;

           case "childTracking":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'iot',
                       'Embedded and IOT',
                       'This system has two parts, school system will enable students to verify their ID upon entering, and student system will allow school and parents to track the child using combination of GPS and GSM to fetch the location of child and send it to proper authority.',
                       'Child Tracking System',
                       'Abrahman (FYP)',
                       '20-06-2020',
                       'Child Tracking System',
                       '#',
                       array('child1.jpg', 'child2.jpg', 'child3.jpg', 'child4.jpg')
                   );
               return $portpolio;
               break;

           case "landis":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'web',
                       'Web Development',
                       'This system will enables effient way to sell/buy land for all citizens, and will remove the problem of selling other people\'s lands, where land must be verified by land surveyer and approved by ministry of land to be allowed to be sold on the system.',
                       'Land Management Information System',
                       'Safia (FYP)',
                       '05-08-2020',
                       'Land Information System',
                       'http://landis.nafuutronics.com',
                       array('landis.png', 'landis2.jpg', 'landis3.jpg', 'landis4.jpg')
                   );
               return $portpolio;
               break;

           case "spds":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'web iot',
                       'Web Development & Embedded and IOT',
                       'This project will enable effient and trust worthy way of ordering sand and pebbles with weight tracking using IoT weight monitoring system to ensure the requested order is what have been delivered!',
                       'Sands and Pebbles Distribution System',
                       'Abubakar and Richard (FYP)',
                       '20-08-2020',
                       'Sand Distribution System',
                       '#',
                       array('spds.png', 'spds1.jpg', 'spds-hardware2.jpg', 'spds1.jpg')
                   );
               return $portpolio;
               break;
            
            case "shipco-hrm":
                $portpolio =
                    setPortfolio(
                        $portfolioId,
                        'web',
                        'Web Development',
                        'Secured human resource system which comes with most tools needed to start using in your human resource department which can then be configured according to your particular needs, this project was developed for Zanzibar Shipping Corporation! >> Link to the system is confidential :(',
                        'Web Application and Closed REST API',
                        'Zanzibar Shipping Corporation (SHIPCO)',
                        '20-09-2021',
                        'Human Resource Management',
                        '#',
                        array('shipco-1.png', 'shipco-2.png', 'shipco-3.png', '')
                    );
                return $portpolio;
                break;

            case "nafuuaccounting":
                $portpolio =
                    setPortfolio(
                        $portfolioId,
                        'web',
                        'Web Development',
                        '
                            Nafuu Accounting is an easy to use and intuitive system that manages business\'s records to keep track of sales, purchases, expenses, and other financial activities. It can create invoices and bills and allow full and credit payments for invoices and bills. 
                            Nafuu Accounting provide an easy and cost effective solution to send invoice reminders to customers as well promotion messages with just one click, it also provides all necessary reports needed by your business needs. 
                            <br/>
                            Nafuu Accounting is a licensed service created and maintained by Nafuutronics, it has all features needed to manages business easily and efficiently, best of all our system is still growing to ensure all business needs apart from sales and purchase can be integrated directly within our system.
                        ',
                        'Web Application and Closed REST API',
                        'Zanzibar Shipping Corporation (SHIPCO)',
                        '20-09-2020',
                        'Nafuu Accounting',
                        'https://nafuuaccounting.com',
                        array('nafuuaccounting-2.png', 'nafuuaccounting-3.png', 'nafuuaccounting-4.png', '')
                    );
                return $portpolio;
                break;

            case "firstaidmobile":
                $portpolio =
                    setPortfolio(
                        $portfolioId,
                        'mobile',
                        'Mobile Development',
                        '
                            This is mobile application (android & ios) that enables customers to request ambulance and make appointments with doctors, doctors and drivers must be registered and verified
                        ',
                        'Web Application and Closed REST API',
                        'Rehema (FYP)',
                        '20-05-2021',
                        'First Aid Mobile APP',
                        'https://expo.dev/accounts/eltiwany/projects/FirstAidMobile',
                        array('firstaid-1.png', 'firstaid-2.png', 'firstaid-3.png', '')
                    );
                return $portpolio;
                break;

           case "leakageDetection":
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'iot',
                       'Embedded and IOT',
                       'This system will allow detection of leakage on Oil tanks when transfer from one tank to another, the system will compare the volume of two tanks and send alert to proper authority when leakage was detected.',
                       'Leakage Detection System',
                       'Ali Charamanda (FYP)',
                       '04-09-2020',
                       'Pipeline Leakage Detector',
                       '#',
                       array('leakage-detector1.jpg', 'leakage-detector2.jpg', '', '')
                   );
               return $portpolio;
               break;


           default:
               $portpolio =
                   setPortfolio(
                       $portfolioId,
                       'web',
                       'Web Development',
                       '',
                       'Project isn\'t uploaded!',
                       'No client found!',
                       '01-01-1990',
                       $portfolioId,
                       '#',
                       array('default.png','','','')
                   );
               return $portpolio;
       }
   }


   function setPortfolio($portfolioId, $typefilter, $type, $description, $job, $client, $year, $project_name, $demo_url, $images) {
       $typefilter_ = $typefilter;
       $type_ = $type;
       $description_ = $description;
       $job_ = $job;
       $client_ = $client;
       $demo_url_ = $demo_url;
       $year_ = $year;
       $project_name_ = $project_name;
       $imagex = array();
       $i = 0;
       foreach ($images as $image) {
            $imagex[$i] = $image;
            ++$i;
       }

       return array
       (
           'portfolioId'=>$portfolioId,
           'typefilter'=>$typefilter_,
           'type'=>$type_,
           'description'=>$description_,
           'job'=>$job_,
           'client'=>$client_,
           'year'=>$year_,
           'project_name'=>$project_name_,
           'demo_url'=>$demo_url_,
           'images'=>array($imagex[0], $imagex[1], $imagex[2], $imagex[3])
       );
   }


   function getDateAndPortfolioId() {
       $portfolioArray = array(
           'kistWeb',
           'docManager',
           'bcrs',
           'koas',
           'homeAutomation',
           'zanIslandCarHire',
           'kosr',
           'planePackingDetection',
//           'fuelLevelIndicator',
           'irims',
           'ssims',
           'smartDustbin',
           'childTracking',
           'landis',
           'spds',
           'leakageDetection',
           'nafuuaccounting',
           'shipco-hrm',
           'firstaidmobile'
       );

       $yearArray = array();

       foreach ($portfolioArray as $data) {
           $portfolio = getPortfolio($data);
           $yearArray += array($portfolio['portfolioId']=>strtotime($portfolio['year']));
       }

       return $yearArray;
   }

