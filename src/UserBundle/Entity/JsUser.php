<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JsUser
 *
 * @ORM\Table(name="js_user", indexes={@ORM\Index(name="user_login_key", columns={"user_loginame"}), @ORM\Index(name="user_nicename", columns={"user_nickname"})})
 * @ORM\Entity
 */
class JsUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_loginame", type="string", length=255, nullable=false)
     */
    private $userLoginame;

    /**
     * @var string
     *
     * @ORM\Column(name="user_nickname", type="string", length=50, nullable=false)
     */
    private $userNickname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_pass", type="string", length=64, nullable=false)
     */
    private $userPass;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=100, nullable=false)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_url", type="string", length=100, nullable=false)
     */
    private $userUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_registered", type="datetime", nullable=false)
     */
    private $userRegistered;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_status", type="integer", nullable=false)
     */
    private $userStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_lastime", type="datetime", nullable=false)
     */
    private $userLastime;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_role", type="integer", nullable=false)
     */
    private $userRole;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set userLoginame
     *
     * @param string $userLoginame
     *
     * @return JsUser
     */
    public function setUserLoginame($userLoginame)
    {
        $this->userLoginame = $userLoginame;

        return $this;
    }

    /**
     * Get userLoginame
     *
     * @return string
     */
    public function getUserLoginame()
    {
        return $this->userLoginame;
    }

    /**
     * Set userNickname
     *
     * @param string $userNickname
     *
     * @return JsUser
     */
    public function setUserNickname($userNickname)
    {
        $this->userNickname = $userNickname;

        return $this;
    }

    /**
     * Get userNickname
     *
     * @return string
     */
    public function getUserNickname()
    {
        return $this->userNickname;
    }

    /**
     * Set userPass
     *
     * @param string $userPass
     *
     * @return JsUser
     */
    public function setUserPass($userPass)
    {
        $this->userPass = $userPass;

        return $this;
    }

    /**
     * Get userPass
     *
     * @return string
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return JsUser
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userUrl
     *
     * @param string $userUrl
     *
     * @return JsUser
     */
    public function setUserUrl($userUrl)
    {
        $this->userUrl = $userUrl;

        return $this;
    }

    /**
     * Get userUrl
     *
     * @return string
     */
    public function getUserUrl()
    {
        return $this->userUrl;
    }

    /**
     * Set userRegistered
     *
     * @param \DateTime $userRegistered
     *
     * @return JsUser
     */
    public function setUserRegistered($userRegistered)
    {
        $this->userRegistered = $userRegistered;

        return $this;
    }

    /**
     * Get userRegistered
     *
     * @return \DateTime
     */
    public function getUserRegistered()
    {
        return $this->userRegistered;
    }

    /**
     * Set userStatus
     *
     * @param integer $userStatus
     *
     * @return JsUser
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return integer
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set userLastime
     *
     * @param \DateTime $userLastime
     *
     * @return JsUser
     */
    public function setUserLastime($userLastime)
    {
        $this->userLastime = $userLastime;

        return $this;
    }

    /**
     * Get userLastime
     *
     * @return \DateTime
     */
    public function getUserLastime()
    {
        return $this->userLastime;
    }

    /**
     * Set userRole
     *
     * @param integer $userRole
     *
     * @return JsUser
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;

        return $this;
    }

    /**
     * Get userRole
     *
     * @return integer
     */
    public function getUserRole()
    {
        return $this->userRole;
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
