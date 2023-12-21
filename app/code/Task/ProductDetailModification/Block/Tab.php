<?php

/*******************************************************************************
 *
 * Copyright 2023
 * All Rights Reserved.
 ******************************************************************************/

namespace Task\ProductDetailModification\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Task\ProductDetailModification\Model\ApiService;

class Tab extends Template
{
    /**
     * @param Context $context
     * @param ApiService $apiService
     * @param array $data
     */
    public function __construct(
        Context    $context,
        ApiService $apiService,
        array      $data = []
    ) {
        parent::__construct($context, $data);
        $this->apiService = $apiService;
    }

    /**
     * @return mixed
     */
    public function getProductDetails() {
        return $this->apiService->getProductDetails();
    }

    /**
     * @return mixed
     */
    public function getProductOffers() {
        return $this->apiService->getProductOffers();
    }

    /**
     * @return mixed
     */
    public function getCategories() {
        return $this->apiService->getCategories();
    }

}

