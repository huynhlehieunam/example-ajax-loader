<?php

namespace Magenest\LoadingScreen\Controller\Ajax;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Test extends \Magento\Framework\App\Action\Action
{

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        //mock execution
        sleep(5);

        $data = ['status'=>'success','msg'=>__("You've finished the task")];
        $result->setData($data);
        return $result;
    }
}