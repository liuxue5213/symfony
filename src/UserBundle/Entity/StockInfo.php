<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StockInfo
 *
 * @ORM\Table(name="stock_info", indexes={@ORM\Index(name="stock_name", columns={"stock_name"})})
 * @ORM\Entity
 */
class StockInfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="stock_name", type="string", length=50, nullable=true)
     */
    private $stockName;

    /**
     * @var string
     *
     * @ORM\Column(name="stock_industry", type="string", length=50, nullable=true)
     */
    private $stockIndustry;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock_addr", type="integer", nullable=true)
     */
    private $stockAddr;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock_no", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $stockNo;



    /**
     * Set stockName
     *
     * @param string $stockName
     *
     * @return StockInfo
     */
    public function setStockName($stockName)
    {
        $this->stockName = $stockName;

        return $this;
    }

    /**
     * Get stockName
     *
     * @return string
     */
    public function getStockName()
    {
        return $this->stockName;
    }

    /**
     * Set stockIndustry
     *
     * @param string $stockIndustry
     *
     * @return StockInfo
     */
    public function setStockIndustry($stockIndustry)
    {
        $this->stockIndustry = $stockIndustry;

        return $this;
    }

    /**
     * Get stockIndustry
     *
     * @return string
     */
    public function getStockIndustry()
    {
        return $this->stockIndustry;
    }

    /**
     * Set stockAddr
     *
     * @param integer $stockAddr
     *
     * @return StockInfo
     */
    public function setStockAddr($stockAddr)
    {
        $this->stockAddr = $stockAddr;

        return $this;
    }

    /**
     * Get stockAddr
     *
     * @return integer
     */
    public function getStockAddr()
    {
        return $this->stockAddr;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return StockInfo
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set stockNo
     *
     * @param integer $stockNo
     *
     * @return StockInfo
     */
    public function setStockNo($stockNo)
    {
        $this->stockNo = $stockNo;

        return $this;
    }

    /**
     * Get stockNo
     *
     * @return integer
     */
    public function getStockNo()
    {
        return $this->stockNo;
    }
}
