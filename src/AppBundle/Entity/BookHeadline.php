<?php

namespace AppBundle\Entity;

/**
 * BookHeadline
 */
class BookHeadline
{
    /**
     * @var integer
     */
    private $hid;

    /**
     * @var string
     */
    private $reviewtitle;

    /**
     * @var \DateTime
     */
    private $createAt;

    /**
     * @var boolean
     */
    private $display;

    /**
     * @var \AppBundle\Entity\BookBook
     */
    private $bid;


    /**
     * Get hid
     *
     * @return integer
     */
    public function getHid()
    {
        return $this->hid;
    }

    /**
     * Set reviewtitle
     *
     * @param string $reviewtitle
     *
     * @return BookHeadline
     */
    public function setReviewtitle($reviewtitle)
    {
        $this->reviewtitle = $reviewtitle;

        return $this;
    }

    /**
     * Get reviewtitle
     *
     * @return string
     */
    public function getReviewtitle()
    {
        return $this->reviewtitle;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return BookHeadline
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set display
     *
     * @param boolean $display
     *
     * @return BookHeadline
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display
     *
     * @return boolean
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set bid
     *
     * @param \AppBundle\Entity\BookBook $bid
     *
     * @return BookHeadline
     */
    public function setBid(\AppBundle\Entity\BookBook $bid = null)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return \AppBundle\Entity\BookBook
     */
    public function getBid()
    {
        return $this->bid;
    }
}

