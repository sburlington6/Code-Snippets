<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
    $ip=$_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
    $ip=$_SERVER['REMOTE_ADDR'];
}
?>

<?php
echo "Your IP address is $ip";
?>

Your IP address is 74.125.224.72 <!-- this is googles ip address -->
