<?php

function Replace($data) {
   $data = trim($data);
   $data = str_replace("'", "", $data);
   $data = str_replace("!", "", $data);
   $data = str_replace("@", "", $data);
   $data = str_replace("#", "", $data);
   $data = str_replace("$", "", $data);
   $data = str_replace("%", "", $data);
   $data = str_replace("^", "", $data);
   $data = str_replace("&", "", $data);
   $data = str_replace("*", "", $data);
   $data = str_replace("(", "", $data);
   $data = str_replace(")", "", $data);
   $data = str_replace("+", "", $data);
   $data = str_replace("=", "", $data);
   $data = str_replace(",", "", $data);
   $data = str_replace(":", "", $data);
   $data = str_replace(";", "", $data);
   $data = str_replace("|", "", $data);
   $data = str_replace("'", "", $data);
   $data = str_replace('"', "", $data);
   $data = str_replace("?", "", $data);
   $data = str_replace("'", "", $data);
   $data = str_replace(".", "-", $data);
   $data = str_replace("অ", "�", $data); //Only Onubad
   $data = strtolower(str_replace("  ", "-", $data));
   $data = strtolower(str_replace(" ", "-", $data));
   $data = strtolower(str_replace("__", "-", $data));
   $data = strtolower(str_replace("_", "-", $data));
   $data = strtolower(str_replace("--", "-", $data));

   return $data;
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}