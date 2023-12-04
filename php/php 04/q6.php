<?php 
    class myClass{

        public function __construct()
        {
            echo('constructor!<br>');
        }   
        public function calDiff($date1,$date2)
        {
            if($date2>$date1)
            {
                $interval = $date1->diff($date2);//calculate the diff between the two years..

                //get the y,m,d
                $y=$interval->y;
                $m=$interval->m;
                $d=$interval->d;

                echo "Difference: $y years, $m months, $d days.<br>";
            }
            else
            {
                $interval=$date2->diff($date1);

                                //get the y,m,d
                                $y=$interval->y;
                                $m=$interval->m;
                                $d=$interval->d;
                
                                echo "Difference: $y years, $m months, $d days.<br>";
            }
        }

        public function converDate()
        {
            $dateString = '12-08-2004';

            $dateObjectDate = DateTime::createFromFormat('d-m-Y', $dateString);
            $formattedDate = $dateObjectDate->format('Y-m-d');

            $dateObjectDateTime = DateTime::createFromFormat('d-m-Y H:i:s', $dateString . ' 00:00:00');
            $formattedDateTime = $dateObjectDateTime->format('Y-m-d H:i:s');

            echo "Converted to Date format: $formattedDate<br>";
            echo "Converted to DateTime format: $formattedDateTime";
        }
    };

    $date1 = new DateTime('1981-11-03');
    $date2 = new DateTime('2013-09-04');

    $obj=new myClass();
    $obj->calDiff($date1,$date2);
    $obj->converDate();




?>