<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidate
 *
 * @ORM\Table(name="candidate")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CandidateRepository")
 */
class Candidate
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Registrationdate", type="date")
     */
    private $registrationdate;

    /**
     * @var string
     *
     * @ORM\Column(name="subsidiary", type="string", length=255)
     */
    private $subsidiary;


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
     * Set name
     *
     * @param string $name
     *
     * @return Candidate
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set registrationdate
     *
     * @param \DateTime $registrationdate
     *
     * @return Candidate
     */
    public function setRegistrationdate($registrationdate)
    {
        $this->registrationdate = $registrationdate;

        return $this;
    }

    /**
     * Get registrationdate
     *
     * @return \DateTime
     */
    public function getRegistrationdate()
    {
        return $this->registrationdate;
    }

    /**
     * Set subsidiary
     *
     * @param string $subsidiary
     *
     * @return Candidate
     */
    public function setSubsidiary($subsidiary)
    {
        $this->subsidiary = $subsidiary;

        return $this;
    }

    /**
     * Get subsidiary
     *
     * @return string
     */
    public function getSubsidiary()
    {
        return $this->subsidiary;
    }
}

