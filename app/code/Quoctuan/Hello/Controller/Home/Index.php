<?php
/**
 * Created by PhpStorm.
 * User: quoctuan
 * Date: 3/3/18
 * Time: 1:29 PM
 */

namespace Quoctuan\Hello\Controller\Home;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action {
    protected $_pageFactory;

    public function __construct(Context $context) {
        parent::__construct($context);
        $this->_pageFactory = $this->_objectManager->get(PageFactory::class);
    }

    public function execute() {
        return $this->_pageFactory->create();
    }
}