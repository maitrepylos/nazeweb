<?php

namespace App\Controller;

class ConnectionController extends AppController {

    public function index(){
        require(ROOT.'\..\wp-config.php');

        if ( is_user_logged_in() ) {
            $current_user = wp_get_current_user();

            $user_roles = $current_user->roles;
            $user_role = array_shift($user_roles);
            echo $user_role;

            echo '<a href="' . wp_logout_url( site_url() . '/covoiturage/connection' ) . '">Déconnection</a>';


            if($user_role == "administrator"){
                echo "admin";
                ?>
                <nav>
                    <ul>
                        <li>un</li>
                        <li>deux</li>
                        <li>trois</li>
                    </ul>
                </nav>
            <?php
            }else{
                ?>
                <nav>
                    <ul>
                        <li>un</li>
                        <li>deux</li>
                    </ul>
                </nav>
            <?php
            }

        }else{
            include(ROOT.'\..\wp-login.php');
        }
    }

}
