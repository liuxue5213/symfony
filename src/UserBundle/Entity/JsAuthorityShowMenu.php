<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsAuthorityShowMenu
 *
 * @ORM\Table(name="js_authority_show_menu")
 * @ORM\Entity
 */
class JsAuthorityShowMenu
{
    /**
     * @var string
     *
     * @ORM\Column(name="menu_name", type="string", length=20, nullable=false)
     */
    private $menuName;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_des", type="string", length=255, nullable=true)
     */
    private $menuDes;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_parent", type="integer", nullable=true)
     */
    private $menuParent;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_link", type="string", length=255, nullable=true)
     */
    private $menuLink;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_sort", type="integer", nullable=false)
     */
    private $menuSort;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_show", type="integer", nullable=false)
     */
    private $menuShow;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_code", type="string", length=120, nullable=false)
     */
    private $menuCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="delete_flg", type="integer", nullable=false)
     */
    private $deleteFlg;

    /**
     * @var integer
     *
     * @ORM\Column(name="corporation_permissions_menu_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $corporationPermissionsMenuId;



    /**
     * Set menuName
     *
     * @param string $menuName
     *
     * @return JsAuthorityShowMenu
     */
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;

        return $this;
    }

    /**
     * Get menuName
     *
     * @return string
     */
    public function getMenuName()
    {
        return $this->menuName;
    }

    /**
     * Set menuDes
     *
     * @param string $menuDes
     *
     * @return JsAuthorityShowMenu
     */
    public function setMenuDes($menuDes)
    {
        $this->menuDes = $menuDes;

        return $this;
    }

    /**
     * Get menuDes
     *
     * @return string
     */
    public function getMenuDes()
    {
        return $this->menuDes;
    }

    /**
     * Set menuParent
     *
     * @param integer $menuParent
     *
     * @return JsAuthorityShowMenu
     */
    public function setMenuParent($menuParent)
    {
        $this->menuParent = $menuParent;

        return $this;
    }

    /**
     * Get menuParent
     *
     * @return integer
     */
    public function getMenuParent()
    {
        return $this->menuParent;
    }

    /**
     * Set menuLink
     *
     * @param string $menuLink
     *
     * @return JsAuthorityShowMenu
     */
    public function setMenuLink($menuLink)
    {
        $this->menuLink = $menuLink;

        return $this;
    }

    /**
     * Get menuLink
     *
     * @return string
     */
    public function getMenuLink()
    {
        return $this->menuLink;
    }

    /**
     * Set menuSort
     *
     * @param integer $menuSort
     *
     * @return JsAuthorityShowMenu
     */
    public function setMenuSort($menuSort)
    {
        $this->menuSort = $menuSort;

        return $this;
    }

    /**
     * Get menuSort
     *
     * @return integer
     */
    public function getMenuSort()
    {
        return $this->menuSort;
    }

    /**
     * Set menuShow
     *
     * @param integer $menuShow
     *
     * @return JsAuthorityShowMenu
     */
    public function setMenuShow($menuShow)
    {
        $this->menuShow = $menuShow;

        return $this;
    }

    /**
     * Get menuShow
     *
     * @return integer
     */
    public function getMenuShow()
    {
        return $this->menuShow;
    }

    /**
     * Set menuCode
     *
     * @param string $menuCode
     *
     * @return JsAuthorityShowMenu
     */
    public function setMenuCode($menuCode)
    {
        $this->menuCode = $menuCode;

        return $this;
    }

    /**
     * Get menuCode
     *
     * @return string
     */
    public function getMenuCode()
    {
        return $this->menuCode;
    }

    /**
     * Set deleteFlg
     *
     * @param integer $deleteFlg
     *
     * @return JsAuthorityShowMenu
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
     * Get corporationPermissionsMenuId
     *
     * @return integer
     */
    public function getCorporationPermissionsMenuId()
    {
        return $this->corporationPermissionsMenuId;
    }
}
