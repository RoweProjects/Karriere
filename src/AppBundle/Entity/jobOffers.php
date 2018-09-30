<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * jobOffers
 *
 * @ORM\Table(name="job_offers")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\jobOffersRepository")
 */
class jobOffers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titel", type="string", length=255)
     */
    private $titel;

    /**
     * @var string
     *
     * @ORM\Column(name="tasks", type="string", length=255)
     */
    private $tasks;

    /**
     * @var string
     *
     * @ORM\Column(name="profile", type="string", length=255)
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="offer", type="string", length=255)
     */
    private $offer;

    /**
     * @var int
     *
     * @ORM\Column(name="id_subsidiary", type="integer")
     */
    private $idSubsidiary;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titel
     *
     * @param string $titel
     *
     * @return jobOffers
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;

        return $this;
    }

    /**
     * Get titel
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Set tasks
     *
     * @param string $tasks
     *
     * @return jobOffers
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;

        return $this;
    }

    /**
     * Get tasks
     *
     * @return string
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Set profile
     *
     * @param string $profile
     *
     * @return jobOffers
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set offer
     *
     * @param string $offer
     *
     * @return jobOffers
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Get offer
     *
     * @return string
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Set idSubsidiary
     *
     * @param integer $idSubsidiary
     *
     * @return jobOffers
     */
    public function setIdSubsidiary($idSubsidiary)
    {
        $this->idSubsidiary = $idSubsidiary;

        return $this;
    }

    /**
     * Get idSubsidiary
     *
     * @return int
     */
    public function getIdSubsidiary()
    {
        return $this->idSubsidiary;
    }
}

