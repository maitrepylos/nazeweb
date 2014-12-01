<?php

/*
$sql = 'SELECT user_login, user_pass FROM wp_users';

$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

while($data = mysql_fetch_assoc($req)) {
	echo '<b>'.$data['user_login'].' '.$data['user_pass'].'</b><br />';
}
*/
require (ROOT.'/../wp-config.php');

if (is_user_logged_in()){
    echo "Connected";
    echo '<a href="'.wp_logout_url(site_url().'/covoiturage/connection').'">Déco</a>';
}
else {
    echo "Not connected";
    require (ROOT.'/../wp-login.php');
};

global $current_user;
echo '<pre>';
var_dump($current_user);
echo '</pre>';

echo $current_user->user_firstname;