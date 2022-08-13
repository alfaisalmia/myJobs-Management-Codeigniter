<?php

defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'myjobs';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['corporate/profile'] = 'customer/profile';
$route['logout'] = 'myjobs/logout';

//$route["seeker/register-edit"] = "seeker/register-edit";
//$route["seeker/login"] = "seeker/login";
//apply ar route part
//$route['seeker/login'] = 'login';
$route['apply-jobs'] = "ajax/apply_jobs";
$route['remove-jobs'] = "ajax/remove_jobs";
$route['search'] = "myjobs/search"; //jobs=controller name and, search=page name

$arr = array(
    "location" => "admin",
    "industry" => "industry",
    "category" => "category",
);

foreach ($arr as $key => $value) {
    $route["admin/" . $key] = $value;
    $route["admin/" . $key . "-new"] = $value . "/create";
    $route["admin/" . $key . "-edit/(:num)"] = $value . "/edit/$1";
    $route["admin/" . $key . "-delete/(:num)"] = $value . "/delete/$1";
    $route["admin/" . $key . "-update"] = $value . "/update";
    //$route["corporate/" . $key . "-update"] = $value . "/update";
}


$arr = array(
    "Seeker/login" => "Seeker",
    "Seeker/register" => "Seeker",
    "Seeker/profile" => "Seeker",
    "Seeker/view_resume" => "Seeker",
    "Seeker/register-edit" => "Seeker",
    "education" => "educationc",
    "result" => "Result",
    "qualification" => "Qualification"
    //folder name=Seeker/page name=education,,,=>Educationc=controller name
);

foreach ($arr as $key => $value) {
    $route["seeker/" . $key] = $value;
    $route["seeker/" . $key . "-new"] = $value . "/create";
    $route["seeker/" . $key . "-edit/(:num)"] = $value . "/edit/$1";
    $route["seeker/" . $key . "-delete/(:num)"] = $value . "/delete/$1";
    $route["seeker/" . $key . "-update"] = $value . "/update";
    //$route["educationc/" . $key . "-education"] = $value . "/education";
}



$arr = array(
    "jobs" => "jobs_management",
    "category" => "category-management",
    "home"=>"jobs_management",
);

foreach ($arr as $key => $value) {
    $route["corporate/" . $key] = $value;
    $route["corporate/" . $key . "-new"] = $value . "/create";
    $route["corporate/" . $key . "-edit/(:num)"] = $value . "/edit/$1";
    $route["corporate/" . $key . "-delete/(:num)"] = $value . "/delete/$1";
    $route["corporate/" . $key . "-update"] = $value . "/update";
    //$route["corporate/" . $key . "-update"] = $value . "/update";
}
require_once( APPPATH . 'helpers/idb_helper.php');
define('EXT', '.php');
require_once( BASEPATH . 'database/DB' . EXT );
$db = & DB();

$db->select("*");
$db->from("job_category");
$results = $db->get()->result();


foreach ($results as $result) {
    $route[Replace($result->name) . "/{$result->id}"] = 'myjobs/category/$1';
    $route[Replace($result->name) . "/{$result->id}/(:num)"] = 'myjobs/category/$1/$1';
}

$db->select("jobs.id, jobs.title, job_category.name");
$db->from("jobs");
$db->join("jobs_category", "jobs.id = jobs_category.jobsid");
$db->join("job_category", "jobs_category.categoryid = job_category.id");
$results = $db->get()->result();

foreach ($results as $result) {
    $route[Replace($result->name) . "/" . Replace($result->title) . "/{$result->id}"] = 'myjobs/details/$1';
}



