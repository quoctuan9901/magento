<?php
/**
 * Created by PhpStorm.
 * User: quoctuan
 * Date: 3/2/18
 * Time: 2:45 PM
 */

namespace Quoctuan\Hello\Controller\Adminhtml\Home;

use Magento\Backend\App\Action;

class Index extends Action {
    public function execute() {
        echo "Module Hello Admin - Home Controller - Index Action";
        exit();
    }
}