<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsSystemUserRole
 *
 * @ORM\Table(name="js_system_user_role", indexes={@ORM\Index(name="menuid", columns={"user_id"})})
 * @ORM\Entity
 */
class JsSystemUserRole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_del", type="integer", nullable=false)
     */
    private $isDel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return JsSystemUserRole
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return JsSystemUserRole
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
     * Set isDel
     *
     * @param integer $isDel
     *
     * @return JsSystemUserRole
     */
    public function setIsDel($isDel)
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * Get isDel
     *
     * @return integer
     */
    public function getIsDel()
    {
        return $this->isDel;
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
