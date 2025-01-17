<?php

declare(strict_types=1);

namespace Dalholm\Omnipay\Klarna;

final class Item extends \Omnipay\Common\Item implements ItemInterface
{
    /**
     * @inheritDoc
     */
    public function getMerchantData()
    {
        return $this->getParameter('merchant_data');
    }

    /**
     * @inheritDoc
     */
    public function getTaxRate()
    {
        return $this->getParameter('tax_rate');
    }

    /**
     * @inheritDoc
     */
    public function getTotalAmount()
    {
        return $this->getParameter('total_amount');
    }

    /**
     * @inheritDoc
     */
    public function getTotalDiscountAmount()
    {
        return $this->getParameter('total_discount_amount');
    }

    /**
     * @inheritDoc
     */
    public function getTotalTaxAmount()
    {
        return $this->getParameter('total_tax_amount');
    }

    /**
     * @inheritDoc
     */
    public function getType()
    {
        return $this->getParameter('type');
    }

    //Dan added suppoort for item-urls
    /**
     * @inheritDoc
     */
    public function getImageUrl()
    {
        return $this->getParameter('image_url');
    }

    /**
     * @param string $data
     */
    public function setImageUrl($data)
    {
        $this->setParameter('image_url', $data);
    }
    //Dan added suppoort for item-urls

    /**
     * @param string $data
     */
    public function setMerchantData($data)
    {
        $this->setParameter('merchant_data', $data);
    }

    /**
     * @param int $taxRate
     */
    public function setTaxRate($taxRate)
    {
        $this->setParameter('tax_rate', $taxRate);
    }

    /**
     * @param int $amount
     */
    public function setTotalAmount($amount)
    {
        $this->setParameter('total_amount', $amount);
    }

    /**
     * @param int $amount
     */
    public function setTotalDiscountAmount($amount)
    {
        $this->setParameter('total_discount_amount', $amount);
    }

    /**
     * @param int $amount
     */
    public function setTotalTaxAmount($amount)
    {
        $this->setParameter('total_tax_amount', $amount);
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->setParameter('type', $type);
    }

    public function setReference($reference)
    {
        $this->setParameter('reference', $reference);
    }

    public function getReference()
    {
        return $this->getParameter('reference');
    }
}
