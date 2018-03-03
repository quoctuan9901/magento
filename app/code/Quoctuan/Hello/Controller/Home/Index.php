<?php
/**
 * Created by PhpStorm.
 * User: quoctuan
 * Date: 3/3/18
 * Time: 1:29 PM
 */

namespace Quoctuan\Hello\Controller\Home;

use Magento\Framework\App\Action\Action;

class Index extends Action {
    public function execute() {
        echo "Module Hello Frontend - Home Controller - Index Action";
        exit();
    }
}