<?php

namespace AppBundle\Entity;

/**
 * Querylog
 */
class Querylog
{
    /**
     * @var \DateTime
     */
    private $queryTime;

    /**
     * @var string
     */
    private $queryString;

    /**
     * @var integer
     */
    private $storeInfoId;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var string
     */
    private $errorInfo;

    /**
     * @var integer
     */
    private $queryLogId;


    /**
     * Set queryTime
     *
     * @param \DateTime $queryTime
     *
     * @return Querylog
     */
    public function setQueryTime($queryTime)
    {
        $this->queryTime = $queryTime;

        return $this;
    }

    /**
     * Get queryTime
     *
     * @return \DateTime
     */
    public function getQueryTime()
    {
        return $this->queryTime;
    }

    /**
     * Set queryString
     *
     * @param string $queryString
     *
     * @return Querylog
     */
    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;

        return $this;
    }

    /**
     * Get queryString
     *
     * @return string
     */
    public function getQueryString()
    {
        return $this->queryString;
    }

    /**
     * Set storeInfoId
     *
     * @param integer $storeInfoId
     *
     * @return Querylog
     */
    public function setStoreInfoId($storeInfoId)
    {
        $this->storeInfoId = $storeInfoId;

        return $this;
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

    /**
     * Set memo
     *
     * @param string $memo
     *
     * @return Querylog
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
     * Set errorInfo
     *
     * @param string $errorInfo
     *
     * @return Querylog
     */
    public function setErrorInfo($errorInfo)
    {
        $this->errorInfo = $errorInfo;

        return $this;
    }

    /**
     * Get errorInfo
     *
     * @return string
     */
    public function getErrorInfo()
    {
        return $this->errorInfo;
    }

    /**
     * Get queryLogId
     *
     * @return integer
     */
    public function getQueryLogId()
    {
        return $this->queryLogId;
    }
}

