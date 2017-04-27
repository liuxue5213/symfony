<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsSystemUsers
 *
 * @ORM\Table(name="js_system_users", indexes={@ORM\Index(name="user_login_key", columns={"username"}), @ORM\Index(name="user_nicename", columns={"nickname"})})
 * @ORM\Entity
 */
class JsSystemUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=255, nullable=false)
     */
    private $nickname;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=false)
     */
    private $createDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login_date", type="datetime", nullable=false)
     */
    private $lastLoginDate = '0000-00-00 00:00:00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_open_use", type="boolean", nullable=false)
     */
    private $isOpenUse = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set username
     *
     * @param string $username
     *
     * @return JsSystemUsers
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return JsSystemUsers
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return JsSystemUsers
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return JsSystemUsers
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return JsSystemUsers
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return JsSystemUsers
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
     * Set status
     *
     * @param boolean $status
     *
     * @return JsSystemUsers
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
     * Set lastLoginDate
     *
     * @param \DateTime $lastLoginDate
     *
     * @return JsSystemUsers
     */
    public function setLastLoginDate($lastLoginDate)
    {
        $this->lastLoginDate = $lastLoginDate;

        return $this;
    }

    /**
     * Get lastLoginDate
     *
     * @return \DateTime
     */
    public function getLastLoginDate()
    {
        return $this->lastLoginDate;
    }

    /**
     * Set isOpenUse
     *
     * @param boolean $isOpenUse
     *
     * @return JsSystemUsers
     */
    public function setIsOpenUse($isOpenUse)
    {
        $this->isOpenUse = $isOpenUse;

        return $this;
    }

    /**
     * Get isOpenUse
     *
     * @return boolean
     */
    public function getIsOpenUse()
    {
        return $this->isOpenUse;
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
