<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsSystemLogs
 *
 * @ORM\Table(name="js_system_logs")
 * @ORM\Entity
 */
class JsSystemLogs
{
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=2000, nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="function_name", type="string", length=100, nullable=true)
     */
    private $functionName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true)
     */
    private $createDate;

    /**
     * @var string
     *
     * @ORM\Column(name="operation_type", type="string", length=1000, nullable=true)
     */
    private $operationType;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable=true)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set content
     *
     * @param string $content
     *
     * @return JsSystemLogs
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set functionName
     *
     * @param string $functionName
     *
     * @return JsSystemLogs
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
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return JsSystemLogs
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set operationType
     *
     * @param string $operationType
     *
     * @return JsSystemLogs
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
     * Set userId
     *
     * @param integer $userId
     *
     * @return JsSystemLogs
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return JsSystemLogs
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
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
