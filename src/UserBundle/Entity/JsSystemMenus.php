<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsSystemMenus
 *
 * @ORM\Table(name="js_system_menus")
 * @ORM\Entity
 */
class JsSystemMenus
{
    /**
     * @var string
     *
     * @ORM\Column(name="menu_name", type="string", length=50, nullable=false)
     */
    private $menuName;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_link", type="string", length=255, nullable=false)
     */
    private $menuLink;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_sort", type="integer", nullable=false)
     */
    private $menuSort;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_del", type="boolean", nullable=false)
     */
    private $isDel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="menu_type", type="string", length=50, nullable=false)
     */
    private $menuType;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_code", type="string", length=255, nullable=false)
     */
    private $menuCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set menuName
     *
     * @param string $menuName
     *
     * @return JsSystemMenus
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
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return JsSystemMenus
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set menuLink
     *
     * @param string $menuLink
     *
     * @return JsSystemMenus
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
     * @return JsSystemMenus
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
     * Set isDel
     *
     * @param boolean $isDel
     *
     * @return JsSystemMenus
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
     * Set menuType
     *
     * @param string $menuType
     *
     * @return JsSystemMenus
     */
    public function setMenuType($menuType)
    {
        $this->menuType = $menuType;

        return $this;
    }

    /**
     * Get menuType
     *
     * @return string
     */
    public function getMenuType()
    {
        return $this->menuType;
    }

    /**
     * Set menuCode
     *
     * @param string $menuCode
     *
     * @return JsSystemMenus
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
