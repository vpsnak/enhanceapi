<?php

namespace W2\EnhanceApi\Observer\Api;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class ProductLoadAfter implements ObserverInterface
{

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $entity = $observer->getEvent()->getEntity();
        $extensionAttributes = $entity->getExtensionAttributes();

        // @TODO check if its possible to load attributes that has use default checked
        $attr = $entity->getData('use_default') ?? [];
        $extensionAttributes->setUseDefault($attr);
        $entity->setExtensionAttributes($extensionAttributes);
    }
}