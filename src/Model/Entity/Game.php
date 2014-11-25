<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 25/11/14
 * Time: 19:19
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;


class Game extends Entity {

    protected function _setPassword($password) {
        return (new DefaultPasswordHasher)->hash($password);
    }


}

