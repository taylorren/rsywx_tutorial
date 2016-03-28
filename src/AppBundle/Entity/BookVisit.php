<?php

namespace AppBundle\Entity;

/**
 * BookVisit
 */
class BookVisit
{
    /**
     * @var integer
     */
    private $vid;

    /**
     * @var integer
     */
    private $bookid;

    /**
     * @var \DateTime
     */
    private $visitwhen;


    /**
     * Get vid
     *
     * @return integer
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * Set bookid
     *
     * @param integer $bookid
     *
     * @return BookVisit
     */
    public function setBookid($bookid)
    {
        $this->bookid = $bookid;

        return $this;
    }

    /**
     * Get bookid
     *
     * @return integer
     */
    public function getBookid()
    {
        return $this->bookid;
    }

    /**
     * Set visitwhen
     *
     * @param \DateTime $visitwhen
     *
     * @return BookVisit
     */
    public function setVisitwhen($visitwhen)
    {
        $this->visitwhen = $visitwhen;

        return $this;
    }

    /**
     * Get visitwhen
     *
     * @return \DateTime
     */
    public function getVisitwhen()
    {
        return $this->visitwhen;
    }
}

