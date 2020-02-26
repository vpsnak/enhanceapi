<?php
/**
 * @author Evangelos Pallis <info.vpsnak@gmail.com>
 * @link https://github.com/vpsnak/magento2-rest-use-default
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 */

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