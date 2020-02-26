<?php
/**
 * @author Evangelos Pallis <info.vpsnak@gmail.com>
 * @link https://github.com/vpsnak/magento2-rest-use-default
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'W2_EnhanceApi',
    __DIR__
);
