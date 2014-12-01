<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 18/11/14
 * Time: 20:49
 */

namespace TestCase;

namespace App\View\Helper;

class ProgressHelper extends AppHelper {
    public function bar($value) {
        $width = round($value / 100, 2) * 100;
        return sprintf(
            '<div class="progress-container">
                <div class="progress-bar" style="width: %s%%"></div>
            </div>', $width);
    }
} 