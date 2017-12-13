<?php

namespace AppBundle\Entity;

/**
 * Storeinfo
 */
class Storeinfo
{
    /**
     * @var string
     */
    private $storeId;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var integer
     */
    private $storeInfoId;


    /**
     * Set storeId
     *
     * @param string $storeId
     *
     * @return Storeinfo
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get storeId
     *
     * @return string
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * Set apiKey
     *
     * @param string $apiKey
     *
     * @return Storeinfo
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get apiKey
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set secret
     *
     * @param string $secret
     *
     * @return Storeinfo
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set memo
     *
     * @param string $memo
     *
     * @return Storeinfo
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;

        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Get storeInfoId
     *
     * @return integer
     */
    public function getStoreInfoId()
    {
        return $this->storeInfoId;
    }
}

