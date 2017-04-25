<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsAuthorityMenuMapping
 *
 * @ORM\Table(name="js_authority_menu_mapping", indexes={@ORM\Index(name="group_id", columns={"role_id"}), @ORM\Index(name="menu_id", columns={"menu_id"})})
 * @ORM\Entity
 */
class JsAuthorityMenuMapping
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
     * @ORM\Column(name="menu_id", type="integer", nullable=false)
     */
    private $menuId;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=112, nullable=true)
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="delete_flg", type="integer", nullable=false)
     */
    private $deleteFlg;

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
     * @return JsAuthorityMenuMapping
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
     * @return JsAuthorityMenuMapping
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
     * Set state
     *
     * @param string $state
     *
     * @return JsAuthorityMenuMapping
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set deleteFlg
     *
     * @param integer $deleteFlg
     *
     * @return JsAuthorityMenuMapping
     */
    public function setDeleteFlg($deleteFlg)
    {
        $this->deleteFlg = $deleteFlg;

        return $this;
    }

    /**
     * Get deleteFlg
     *
     * @return integer
     */
    public function getDeleteFlg()
    {
        return $this->deleteFlg;
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
