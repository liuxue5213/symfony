<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsSystemRoles
 *
 * @ORM\Table(name="js_system_roles")
 * @ORM\Entity
 */
class JsSystemRoles
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
    private $status = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true)
     */
    private $createDate;

    /**
     * @var string
     *
     * @ORM\Column(name="remark", type="string", length=1000, nullable=true)
     */
    private $remark;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_ids", type="string", length=255, nullable=true)
     */
    private $menuIds;

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
     * @return JsSystemRoles
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
     * @return JsSystemRoles
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
     * @return JsSystemRoles
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
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return JsSystemRoles
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
     * Set remark
     *
     * @param string $remark
     *
     * @return JsSystemRoles
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
     * Set menuIds
     *
     * @param string $menuIds
     *
     * @return JsSystemRoles
     */
    public function setMenuIds($menuIds)
    {
        $this->menuIds = $menuIds;

        return $this;
    }

    /**
     * Get menuIds
     *
     * @return string
     */
    public function getMenuIds()
    {
        return $this->menuIds;
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
