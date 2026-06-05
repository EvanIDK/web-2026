<?php
    function findLeapYear($year): string {
        if (($year % 4 == 0 && $year % 100 != 0)  || ($year % 400 == 0)) {
            return 'Да';
        }
        else {
            return 'Нет';
        }
    }

    function digitToWord($number): string {
        switch ($number) {
            case 0: return 'Ноль';
            case 1: return 'Один';
            case 2: return 'Два';
            case 3: return 'Три';
            case 4: return 'Четыре';
            case 5: return 'Пять';
            case 6: return 'Шесть';
            case 7: return 'Семь';
            case 8: return 'Восемь';
            case 9: return 'Девять';
        }
    }

    function zodiagSign($dates): string {
        if ($dates[2] == '.') {
            $day = (int)($dates[0] . $dates[1]);
            $month = (int)($dates[3] . $dates[4]);
        }
        else if ($dates[4] == '-') {   
            $day = (int)($dates[8] . $dates[9]);
            $month = (int)($dates[5] . $dates[6]);
        }
        else if ($dates[2] == '/') {   
            $day = (int)($dates[3] . $dates[4]);
            $month = (int)($dates[0] . $dates[1]);
        }
        else if ($dates[2] == '-' && $dates[6] == '-') {
            $day = (int)($dates[0] . $dates[1]);
            $mStr = $dates[3] . $dates[4] . $dates[5];
            if ($mStr == 'Jan') $month = 1; else
            if ($mStr == 'Feb') $month = 2; else
            if ($mStr == 'Mar') $month = 3; else
            if ($mStr == 'Apr') $month = 4; else
            if ($mStr == 'May') $month = 5; else
            if ($mStr == 'Jun') $month = 6; else
            if ($mStr == 'Jul') $month = 7; else
            if ($mStr == 'Aug') $month = 8; else
            if ($mStr == 'Sep') $month = 9; else
            if ($mStr == 'Oct') $month = 10; else
            if ($mStr == 'Nov') $month = 11; else
            if ($mStr == 'Dec') $month = 12; else
            return 'Неверный формат';
        }
        else if ($dates[1] == ' ' || $dates[2] == ' ') {
            if ($dates[1] == ' ') {
                $day = (int)$dates[0];
                $monthIndex = 2;
            } else {
                $day = (int)($dates[0] . $dates[1]);
                $monthIndex = 3;
            }
            
            $monthStr = '';
            for ($i = $monthIndex; isset($dates[$i]) && $dates[$i] != ' '; $i++) {
                $monthStr = $monthStr . $dates[$i];
            }
            
            if ($monthStr == 'января')   $month = 1; else
            if ($monthStr == 'февраля')  $month = 2; else
            if ($monthStr == 'марта')    $month = 3; else
            if ($monthStr == 'апреля')   $month = 4; else
            if ($monthStr == 'мая')      $month = 5; else
            if ($monthStr == 'июня')     $month = 6; else
            if ($monthStr == 'июля')     $month = 7; else 
            if ($monthStr == 'августа')  $month = 8; else
            if ($monthStr == 'сентября') $month = 9; else
            if ($monthStr == 'октября')  $month = 10; else
            if ($monthStr == 'ноября')   $month = 11; else
            if ($monthStr == 'декабря')  $month = 12; else
            return 'Неверный формат';
        }
        else {
            return 'Неверный формат';    
        }

            if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
                return 'Овен';
            }
            if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
                return 'Телец';
            }
            if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 21)) {
                return 'Близнецы';
            }
            if (($month == 6 && $day >= 22) || ($month == 7 && $day <= 22)) {
                return 'Рак';
            }
            if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
                return 'Лев';
            }
            if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
                return 'Дева';
            }
            if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 23)) {
                return 'Весы';
            }
            if (($month == 10 && $day >= 24) || ($month == 11 && $day <= 21)) {
                return 'Скорпион';
            }
            if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
                return 'Стрелец';
            }
            if (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
                return 'Козерог';
            }
            if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
                return 'Водолей';
            }
            if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
                return 'Рыбы';
            }
    }

    function luckyTicket($Ticket): string {
        $Ticket = (string)$Ticket;
        $first_three = (int)$Ticket[0] + (int)$Ticket[1] + (int)$Ticket[2];
        $second_three = (int)$Ticket[3] + (int)$Ticket[4] + (int)$Ticket[5];
        if ($first_three == $second_three) {
            return (string)$Ticket . '<br>';
        } 
        return ' ';
    }

    function factorialOfNumber($NumberFactorial): int {
        $Number = (int)$NumberFactorial;
        if ($Number <= 1) {
            return 1;
        }
        return $Number * factorialOfNumber($Number - 1);
        }

    if (isset($_POST['leap_year'])) {
        $LeapYear = (int)$_POST['leap_year'];
        if ($LeapYear >= 30000) {
            echo 'Переполнение';
        }
        else {
            if (findLeapYear($LeapYear) == true) {
                echo 'Yes';
            }
            else {
                echo 'No';
            }
        }
    }
   if (isset($_POST['number_to_string'])) {
        $NumberToString = (int)$_POST['number_to_string'];
        if ($NumberToString >= 10) {
            echo 'Введите только 1 цифру';
        }
        else {
            echo digitToWord($NumberToString);
        }
   }
    if (isset($_POST['zodiag_sign'])) {
        $ZodiagSign = $_POST['zodiag_sign'];
        echo zodiagSign($ZodiagSign);
    }
    if (isset($_POST['task4'])) {
        $StartTicket = (int)$_POST['start_ticket'];
        $EndTicket = (int)$_POST['end_ticket'];
        if ($StartTicket <= $EndTicket) {
            for ($StartTicket; $StartTicket <= $EndTicket; ++$StartTicket) {
                $OneOfTickets = $StartTicket;
                if (luckyTicket($OneOfTickets)) echo luckyTicket($OneOfTickets); 
            }
        }
        else {
            echo 'Неправильный ввод';
        }
    }
    if(isset($_POST['factorial_of_number'])) {
        $Num = (int)$_POST['factorial_of_number'];
        echo factorialOfNumber($Num);
    }

?>
