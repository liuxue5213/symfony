<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsAuthorityRoleMenu
 *
 * @ORM\Table(name="js_authority_role_menu", indexes={@ORM\Index(name="menuid", columns={"menu_id"})})
 * @ORM\Entity
 */
class JsAuthorityRoleMenu
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
     * @ORM\Column(name="menu_id", type="integer", nullable=true)
     */
    private $menuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="show_id", type="integer", nullable=false)
     */
    private $showId;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

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
     * @return JsAuthorityRoleMenu
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
     * Set menuId
     *
     * @param integer $menuId
     *
     * @return JsAuthorityRoleMenu
     */
    public function setMenuId($menuId)
    {
        $this->menuId = $menuId;

        return $this;
    }

    /**
     * Get menuId
     *
     * @return integer
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * Set showId
     *
     * @param integer $showId
     *
     * @return JsAuthorityRoleMenu
     */
    public function setShowId($showId)
    {
        $this->showId = $showId;

        return $this;
    }

    /**
     * Get showId
     *
     * @return integer
     */
    public function getShowId()
    {
        return $this->showId;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return JsAuthorityRoleMenu
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
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
