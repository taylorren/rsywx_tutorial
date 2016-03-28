<?php

namespace AppBundle\Entity;

/**
 * BookReview
 */
class BookReview
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $datein;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var \AppBundle\Entity\BookHeadline
     */
    private $hid;


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
     *
     * @return BookReview
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
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
     * Set datein
     *
     * @param \DateTime $datein
     *
     * @return BookReview
     */
    public function setDatein($datein)
    {
        $this->datein = $datein;

        return $this;
    }

    /**
     * Get datein
     *
     * @return \DateTime
     */
    public function getDatein()
    {
        return $this->datein;
    }

    /**
     * Set uri
     *
     * @param string $uri
     *
     * @return BookReview
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set hid
     *
     * @param \AppBundle\Entity\BookHeadline $hid
     *
     * @return BookReview
     */
    public function setHid(\AppBundle\Entity\BookHeadline $hid = null)
    {
        $this->hid = $hid;

        return $this;
    }

    /**
     * Get hid
     *
     * @return \AppBundle\Entity\BookHeadline
     */
    public function getHid()
    {
        return $this->hid;
    }
}

