<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsAuthorityRole
 *
 * @ORM\Table(name="js_authority_role")
 * @ORM\Entity
 */
class JsAuthorityRole
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=true)
     */
    private $pid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ctime", type="datetime", nullable=true)
     */
    private $ctime;

    /**
     * @var string
     *
     * @ORM\Column(name="remark", type="string", length=1000, nullable=true)
     */
    private $remark;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_flg", type="boolean", nullable=true)
     */
    private $deleteFlg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_delete", type="boolean", nullable=true)
     */
    private $isDelete;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return JsAuthorityRole
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     *
     * @return JsAuthorityRole
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return JsAuthorityRole
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set ctime
     *
     * @param \DateTime $ctime
     *
     * @return JsAuthorityRole
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Get ctime
     *
     * @return \DateTime
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * Set remark
     *
     * @param string $remark
     *
     * @return JsAuthorityRole
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set deleteFlg
     *
     * @param boolean $deleteFlg
     *
     * @return JsAuthorityRole
     */
    public function setDeleteFlg($deleteFlg)
    {
        $this->deleteFlg = $deleteFlg;

        return $this;
    }

    /**
     * Get deleteFlg
     *
     * @return boolean
     */
    public function getDeleteFlg()
    {
        return $this->deleteFlg;
    }

    /**
     * Set isDelete
     *
     * @param boolean $isDelete
     *
     * @return JsAuthorityRole
     */
    public function setIsDelete($isDelete)
    {
        $this->isDelete = $isDelete;

        return $this;
    }

    /**
     * Get isDelete
     *
     * @return boolean
     */
    public function getIsDelete()
    {
        return $this->isDelete;
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
