<?php

/**
 * OGP (One Gate Payment)
 */

namespace Kangyasin\Bni\Modules;

use Kangyasin\Bni\Bni;

class OGP extends Bni
{
    public function __construct($token)
    {
        parent::__construct($token);
    }

    /**
     * getBalance
     *
     * @param  string $accountNo
     * @return \Kangyasin\Response\Response
     */
    public function getBalance(string $accountNo)
    {
        $requestUrl = $this->apiUrl . '/H2H/v2/getbalance';
        return $this->sendRequest('POST', $requestUrl, compact('accountNo'));
    }

    /**
     * getInHouseInquiry
     *
     * @param  string $accountNo
     * @return \Kangyasin\Response\Response
     */
    public function getInHouseInquiry(string $accountNo)
    {
        $requestUrl = $this->apiUrl . '/H2H/v2/getinhouseinquiry';
        return $this->sendRequest('POST', $requestUrl, compact('accountNo'));
    }

    /**
     * doPayment
     *
     * @param  array $fields
     * @return \Kangyasin\Response\Response
     */
    public function doPayment(array $fields)
    {
        $requestUrl = $this->apiUrl . '/H2H/v2/dopayment';
        return $this->sendRequest('POST', $requestUrl, $fields);
    }

    /**
     * getPaymentStatus
     *
     * @param  string $customerReferenceNumber
     * @return \Kangyasin\Response\Response
     */
    public function getPaymentStatus(string $customerReferenceNumber)
    {
        $requestUrl = $this->apiUrl . '/H2H/v2/getpaymentstatus';
        return $this->sendRequest('POST', $requestUrl, compact('customerReferenceNumber'));
    }

    /**
     * getInterBankInquiry
     *
     * @param  array $fields
     * @return \Kangyasin\Response\Response
     */
    public function getInterBankInquiry(array $fields)
    {
        $requestUrl = $this->apiUrl . '/H2H/v2/getinterbankinquiry';
        return $this->sendRequest('POST', $requestUrl, $fields);
    }

    /**
     * getInterBankPayment
     *
     * @param  array $fields
     * @return \Kangyasin\Response\Response
     */
    public function getInterBankPayment(array $fields)
    {
        $requestUrl = $this->apiUrl . '/H2H/v2/getinterbankpayment';
        return $this->sendRequest('POST', $requestUrl, $fields);
    }
}
