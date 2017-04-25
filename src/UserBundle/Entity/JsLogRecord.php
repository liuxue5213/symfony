<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsLogRecord
 *
 * @ORM\Table(name="js_log_record")
 * @ORM\Entity
 */
class JsLogRecord
{
    /**
     * @var string
     *
     * @ORM\Column(name="operation_info", type="string", length=2000, nullable=true)
     */
    private $operationInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="function_name", type="string", length=100, nullable=true)
     */
    private $functionName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="addtime", type="datetime", nullable=true)
     */
    private $addtime;

    /**
     * @var string
     *
     * @ORM\Column(name="operation_type", type="string", length=1000, nullable=true)
     */
    private $operationType;

    /**
     * @var string
     *
     * @ORM\Column(name="operation_name", type="string", length=100, nullable=true)
     */
    private $operationName;

    /**
     * @var string
     *
     * @ORM\Column(name="operation_ip", type="string", length=50, nullable=true)
     */
    private $operationIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set operationInfo
     *
     * @param string $operationInfo
     *
     * @return JsLogRecord
     */
    public function setOperationInfo($operationInfo)
    {
        $this->operationInfo = $operationInfo;

        return $this;
    }

    /**
     * Get operationInfo
     *
     * @return string
     */
    public function getOperationInfo()
    {
        return $this->operationInfo;
    }

    /**
     * Set functionName
     *
     * @param string $functionName
     *
     * @return JsLogRecord
     */
    public function setFunctionName($functionName)
    {
        $this->functionName = $functionName;

        return $this;
    }

    /**
     * Get functionName
     *
     * @return string
     */
    public function getFunctionName()
    {
        return $this->functionName;
    }

    /**
     * Set addtime
     *
     * @param \DateTime $addtime
     *
     * @return JsLogRecord
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return \DateTime
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Set operationType
     *
     * @param string $operationType
     *
     * @return JsLogRecord
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;

        return $this;
    }

    /**
     * Get operationType
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * Set operationName
     *
     * @param string $operationName
     *
     * @return JsLogRecord
     */
    public function setOperationName($operationName)
    {
        $this->operationName = $operationName;

        return $this;
    }

    /**
     * Get operationName
     *
     * @return string
     */
    public function getOperationName()
    {
        return $this->operationName;
    }

    /**
     * Set operationIp
     *
     * @param string $operationIp
     *
     * @return JsLogRecord
     */
    public function setOperationIp($operationIp)
    {
        $this->operationIp = $operationIp;

        return $this;
    }

    /**
     * Get operationIp
     *
     * @return string
     */
    public function getOperationIp()
    {
        return $this->operationIp;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
