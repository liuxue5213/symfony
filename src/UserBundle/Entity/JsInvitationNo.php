<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsInvitationNo
 *
 * @ORM\Table(name="js_invitation_no")
 * @ORM\Entity
 */
class JsInvitationNo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="invitation_no", type="integer", nullable=false)
     */
    private $invitationNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_del", type="boolean", nullable=false)
     */
    private $isDel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer", nullable=true)
     */
    private $roleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set invitationNo
     *
     * @param integer $invitationNo
     *
     * @return JsInvitationNo
     */
    public function setInvitationNo($invitationNo)
    {
        $this->invitationNo = $invitationNo;

        return $this;
    }

    /**
     * Get invitationNo
     *
     * @return integer
     */
    public function getInvitationNo()
    {
        return $this->invitationNo;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return JsInvitationNo
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
     * @param boolean $isDel
     *
     * @return JsInvitationNo
     */
    public function setIsDel($isDel)
    {
        $this->isDel = $isDel;

        return $this;
    }

    /**
     * Get isDel
     *
     * @return boolean
     */
    public function getIsDel()
    {
        return $this->isDel;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return JsInvitationNo
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
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return JsInvitationNo
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
