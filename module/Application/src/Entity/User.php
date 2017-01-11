<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use BjyAuthorize\Provider\Role\ProviderInterface;
use \ZfcUser\Entity\UserInterface;

/**
 * \Application\Entity\User
 *
 * @ORM\Table(name="systemuser")
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\UserRepository")
 */
class User implements ProviderInterface, UserInterface
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="systemuser_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=false)
     */
    private $username;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=false)
     */
    private $password;

    /**
     * @var string $role
     *
     * @ORM\Column(name="role_id", type="string", length=100, nullable=false)
     */
	private $role;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id.
     *
     * @param int $id
     * @return UserInterface
     */
    public function setId($id) {
        $this->id = $id;
    }
    /**
     * Set email
     *
     * @param string $email
     * @return Systemuser
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
     * Set username
     *
     * @param string $username
     * @return Systemuser
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
     * Set password
     *
     * @param string $password
     * @return Systemuser
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
     * Set displayname
     *
     * @param string $displayname
     * @return Systemuser
     */
    public function setDisplayname($displayname)
    {
        $this->displayname = $displayname;

        return $this;
    }

    /**
     * Get displayname
     *
     * @return string
     */
    public function getDisplayname()
    {
        return $this->displayname;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Conference
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Get state.
     *
     * @return int
     */
    public function getState() {
        return null;
    }
    /**
     * Set state.
     *
     * @param int $state
     * @return UserInterface
     */
    public function setState($state) {
        //does nothing
    }

    /**
     * Set role
     *
     * @param \Application\Entity\Role $role
     * @return Systemuser
     */
    public function setRole(\Application\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }
    /**
     * Get role
     *
     * @return \Application\Entity\Role
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * Get role (needed by ProviderInterface)
     *
     * @return array
     */
    public function getRoles() {
        return array($this->getRole());
    }
}