<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsMenu
 *
 * @ORM\Table(name="js_menu")
 * @ORM\Entity
 */
class JsMenu
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
     * @ORM\Column(name="dir_name", type="string", length=120, nullable=false)
     */
    private $dirName;

    /**
     * @var integer
     *
     * @ORM\Column(name="delete_flg", type="integer", nullable=false)
     */
    private $deleteFlg;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=50, nullable=true)
     */
    private $fileName;

    /**
     * @var string
     *
     * @ORM\Column(name="operation_name", type="string", length=50, nullable=true)
     */
    private $operationName;

    /**
     * @var string
     *
     * @ORM\Column(name="menu_code", type="string", length=100, nullable=true)
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
     * @return JsMenu
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
     * @return JsMenu
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
     * @return JsMenu
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
     * @return JsMenu
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
     * @return JsMenu
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
     * @return JsMenu
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
     * Set dirName
     *
     * @param string $dirName
     *
     * @return JsMenu
     */
    public function setDirName($dirName)
    {
        $this->dirName = $dirName;

        return $this;
    }

    /**
     * Get dirName
     *
     * @return string
     */
    public function getDirName()
    {
        return $this->dirName;
    }

    /**
     * Set deleteFlg
     *
     * @param integer $deleteFlg
     *
     * @return JsMenu
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
     * Set fileName
     *
     * @param string $fileName
     *
     * @return JsMenu
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set operationName
     *
     * @param string $operationName
     *
     * @return JsMenu
     */
    public function setOperationName($operationName)
    {
        $this->operationName = $operationName;

        return $this;
    }

    /**
     * Get operationName
     *
     * @return string
     */
    public function getOperationName()
    {
        return $this->operationName;
    }

    /**
     * Set menuCode
     *
     * @param string $menuCode
     *
     * @return JsMenu
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
