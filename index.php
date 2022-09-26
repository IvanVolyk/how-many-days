<?php

//Скрипт, який виводить скільки минуло днів з початку 2022 року і скільки минуло днів з початку війни.

$start_date = '2022-01-01';
$start_date_timestamp = strtotime($start_date);

$start_date_war = '2022-02-24';
$start_date_war_timestamp = strtotime($start_date_war);

$diff = time() - $start_date_timestamp;
$days_passed = floor((($diff / 60)/60)/24);

$diff_war = time() - $start_date_war_timestamp;
$days_passed_war = floor((($diff_war / 60)/60)/24);

echo 'З початку Нового 2022 року&nbsp;' . date('d.m.Y', $start_date_timestamp) . '&nbsp;і сьогоднішнім днем&nbsp;' . date('d.m.Y') . '&nbsp;минуло&nbsp;' . $days_passed . '&nbsp;днів!<br><br>';

echo 'Від початку війни&nbsp;' . date('d.m.Y', $start_date_war_timestamp) . '&nbsp;і сьогоднішнім днем&nbsp;' . date('d.m.Y') . '&nbsp;минуло&nbsp;' . $days_passed_war . '&nbsp;днів!';

?>