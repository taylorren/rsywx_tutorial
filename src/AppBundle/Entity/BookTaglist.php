<?php

namespace AppBundle\Entity;

/**
 * BookTaglist
 */
class BookTaglist
{
    /**
     * @var integer
     */
    private $tid;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var \AppBundle\Entity\BookBook
     */
    private $bid;


    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set tag
     *
     * @param string $tag
     *
     * @return BookTaglist
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set bid
     *
     * @param \AppBundle\Entity\BookBook $bid
     *
     * @return BookTaglist
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

