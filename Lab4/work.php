<?php
    function findLeapYear($year): bool {
        if (($year % 4 == 0 && $year % 100 != 0)  || ($year % 400 == 0)) {
            return true;
        }
        else {
            return false;
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
        $day = (int)($dates[0] . $dates[1]);
        $month = (int)($dates[3] . $dates[4]);
            if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
                return 'Овен';
            }
            if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 22)) {
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
            if (($month == 12 && $day >= 22) || ($month == 1 && $day <= 20)) {
                return 'Козерог';
            }
            if (($month == 1 && $day >= 21) || ($month == 2 && $day <= 20)) {
                return 'Водолей';
            }
            if (($month == 2 && $day >= 21) || ($month == 3 && $day <= 20)) {
                return 'Рыбы';
            }
    }

    function luckyTicket($Ticket): string {
        $Ticket = (string)$Ticket;
        $first_three = (int)$Ticket[0] + (int)$Ticket[1] + (int)$Ticket[2];
        $second_three = (int)$Ticket[3] + (int)$Ticket[4] + (int)$Ticket[5];
        if ($first_three == $second_three) {
            return $Ticket . '<br>';
        }
    }

    if (isset($_POST['leap_year'])) {
        $LeapYear = (int)$_POST['leap_year'];
        if (findLeapYear($LeapYear) == true) {
            echo 'Yes';
        }
        else {
            echo 'No';
        }
    }
   if (isset($_POST['number_to_string'])) {
        $NumberToString = (int)$_POST['number_to_string'];
        echo digitToWord($NumberToString);
   }
    if (isset($_POST['zodiag_sign'])) {
        $ZodiagSign = $_POST['zodiag_sign'];
        echo zodiagSign($ZodiagSign);
    }
    if (isset($_POST['task4'])) {
        $StartTicket = (int)$_POST['start_ticket'];
        $EndTicket = (int)$_POST['end_ticket'];
        for ($StartTicket; $StartTicket <= $EndTicket; ++$StartTicket) {
            $OneOfTickets = $StartTicket;
            if (luckyTicket($OneOfTickets)) echo luckyTicket($OneOfTickets); 
        }
    }

?>
