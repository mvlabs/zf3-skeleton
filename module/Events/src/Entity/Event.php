<?php

namespace Events\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events\Entity\Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="Events\Entity\Repository\EventRepository")
 *
 */
class Event {

	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="SEQUENCE")
	 * @ORM\SequenceGenerator(sequenceName="event_id_seq", allocationSize=1, initialValue=1)
	 */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string $abstract
     *
     * @ORM\Column(name="abstract", type="string", length=255, nullable=false)
     */
    private $abstract;

    /**
     * @var \DateTime $datefrom
     *
     * @ORM\Column(name="datefrom", type="datetime", nullable=false)
     */
    private $datefrom;

    /**
     * @var \DateTime $dateto
     *
     * @ORM\Column(name="dateto", type="datetime", nullable=false)
     */
    private $dateto;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     */
    private $city;

    /**
     * @var string $venue
     *
     * @ORM\Column(name="venue", type="string", length=255, nullable=false)
     */
    private $venue;

    /**
     * @var string $averagedayfee
     *
     * @ORM\Column(name="averagedayfee", type="integer", nullable=true)
     */
    private $averagedayfee;

    /**
     * @var string $mainsitelink
     *
     * @ORM\Column(name="mainsitelink", type="string", length=255, nullable=false)
     */
    private $mainsitelink;

    /**
     * @var Events\Entity\Country
     *
     * @ORM\ManyToOne(targetEntity="Events\Entity\Country", cascade={"persist", "remove"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set abstract
     *
     * @param text $abstract
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
    }

    /**
     * Get abstract
     *
     * @return text
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Set datefrom
     *
     * @param date $datefrom
     */
    public function setDatefrom($dateFrom)
    {
        $this->datefrom = $dateFrom;
    }

    /**
     * Get datefrom
     *
     * @return date
     */
    public function getDateFrom()
    {
        return $this->datefrom;
    }

    /**
     * Set dateto
     *
     * @param date $dateto
     */
    public function setDateto($dateTo)
    {
        $this->dateto = $dateTo;
    }

    /**
     * Get dateto
     *
     * @return date
     */
    public function getDateTo()
    {
        return $this->dateto;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

	 /**
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set venue
     *
     * @param string $venue
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
    }

    /**
     * Get venue
     *
     * @return string
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Set averagedayfee
     *
     * @param integer $averagedayfee
     */
    public function setAveragedayfee($averagedayfee)
    {
        $this->averagedayfee = $averagedayfee;
    }

    /**
     * Get averagedayfee
     *
     * @return integer
     */
    public function getAveragedayfee()
    {
        return $this->averagedayfee;
    }

    /**
     * Set mainsitelink
     *
     * @param string $mainsitelink
     */
    public function setMainsitelink($mainsitelink)
    {
        $this->mainsitelink = $mainsitelink;
    }

    /**
     * Get mainsitelink
     *
     * @return string
     */
    public function getMainsitelink()
    {
        return $this->mainsitelink;
    }


    /**
     * Get country slug
     *
     * @return string Returns country slug
     */
    public function getCountrySlug()
    {
        if (!($this->country instanceof Country)) {
            return '';
        }

        return $this->country->getSlug();

    }

    /*
     * Get country name
     *
     * @return string
     */
    public function getCountryName()
    {
        if (!($this->country instanceof Country)) {
            return 'n.a.';
        }

        return $this->country->getName();
    }

}
