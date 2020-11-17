<?php

namespace Magenest\LoadingScreen\Controller\Ajax;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $result;
    }
}