<?php
/*for($i=1;$i<=3000;$i++){
    $c ="D:/img/10.12.477".$i.".jpg";
    copy ('D:/img/10.12.4771.jpg' ,$c);
}
exit();*/

/**
 * Created by PhpStorm.
 * User: My Computer
 * Date: 8/19/2017
 * Time: 2:00 PM
 */
$time_start = microtime(true);
set_time_limit(0);
$path ="/home/amikom2/public_html/public/fotomhs/1999/";
if ($handle = opendir($path)) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
            $old_name = $path.$entry;
            $entry[2] ="_";
            $entry[5] ="_";
            $new_file = $path.$entry;
            rename($old_name,$new_file);
           // echo "renamed $entry\n";

        }
    }

    closedir($handle);
}


echo "renamed in seconds: " . (microtime(true) - $time_start);

