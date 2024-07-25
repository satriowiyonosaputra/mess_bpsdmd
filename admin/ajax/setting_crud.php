<?php

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['get_general'])) 
{
    $q = "SELECT * FROM `setting` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($res);
    echo $json_data;
}


if(isset($_POST['upd_general']))
{
    $frm_data = filteration($_POST);

    $q = "UPDATE `setting` SET `site_title`=?,`site_about`=? WHERE 1 `sr_no`=?";
    $values = [$frm_data['site_title'],$frm_data['site_about'],1];
    $res = update($q,$values,'ssi');
    echo $res;
}

?>
