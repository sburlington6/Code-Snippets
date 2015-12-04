<?php 
$age = time() - filemtime($_SERVER['SCRIPT_FILENAME']);
$time[] = $age%60;//seconds
$time[] = ($age/60)%60;//minutes
$time[] = ($age/3600)%24;//hours
$time[]= ($age/86400)%7;//days
$time[] = ($age/604800)%52;//weeks
$time[] = ($age/31556926)%12;//years
$times = array('second','minute','hour','day','week','year');

for($i=count($times)-1;$i>=0;$i--)
{
    if ($time[$i] > 0)
    {
        $mod = $time[$i].' '.$times[$i];   
        if ($time[$i] > 1)
        {
            $mod .= 's ';
        }
        else
        {
            $mod .= ' ';
        }
    }
}
echo 'This file was modified '.$mod.'ago';

?>