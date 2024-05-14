<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Adele\Modifyname\Plugin\Magento\Catalog\Model;

class Product
{

    public function afterGetName(
        \Magento\Catalog\Model\Product $subject,
        $result
    ) {
        $brand = $subject->getAttributeText('brand');
        return $result. ' ' . '(' . $brand . ')';
    }
}

