<?php

namespace AppBundle\Entity;

/**
 * BookBook
 */
class BookBook
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $bookid;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $copyrighter;

    /**
     * @var boolean
     */
    private $translated;

    /**
     * @var \DateTime
     */
    private $purchdate;

    /**
     * @var float
     */
    private $price;

    /**
     * @var \DateTime
     */
    private $pubdate;

    /**
     * @var \DateTime
     */
    private $printdate;

    /**
     * @var string
     */
    private $ver;

    /**
     * @var string
     */
    private $deco;

    /**
     * @var integer
     */
    private $kword;

    /**
     * @var integer
     */
    private $page;

    /**
     * @var string
     */
    private $isbn;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $intro;

    /**
     * @var boolean
     */
    private $instock;

    /**
     * @var \AppBundle\Entity\BookPlace
     */
    private $place;

    /**
     * @var \AppBundle\Entity\BookPublisher
     */
    private $publisher;


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
     * Set bookid
     *
     * @param string $bookid
     *
     * @return BookBook
     */
    public function setBookid($bookid)
    {
        $this->bookid = $bookid;

        return $this;
    }

    /**
     * Get bookid
     *
     * @return string
     */
    public function getBookid()
    {
        return $this->bookid;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return BookBook
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
     * Set author
     *
     * @param string $author
     *
     * @return BookBook
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return BookBook
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set copyrighter
     *
     * @param string $copyrighter
     *
     * @return BookBook
     */
    public function setCopyrighter($copyrighter)
    {
        $this->copyrighter = $copyrighter;

        return $this;
    }

    /**
     * Get copyrighter
     *
     * @return string
     */
    public function getCopyrighter()
    {
        return $this->copyrighter;
    }

    /**
     * Set translated
     *
     * @param boolean $translated
     *
     * @return BookBook
     */
    public function setTranslated($translated)
    {
        $this->translated = $translated;

        return $this;
    }

    /**
     * Get translated
     *
     * @return boolean
     */
    public function getTranslated()
    {
        return $this->translated;
    }

    /**
     * Set purchdate
     *
     * @param \DateTime $purchdate
     *
     * @return BookBook
     */
    public function setPurchdate($purchdate)
    {
        $this->purchdate = $purchdate;

        return $this;
    }

    /**
     * Get purchdate
     *
     * @return \DateTime
     */
    public function getPurchdate()
    {
        return $this->purchdate;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return BookBook
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set pubdate
     *
     * @param \DateTime $pubdate
     *
     * @return BookBook
     */
    public function setPubdate($pubdate)
    {
        $this->pubdate = $pubdate;

        return $this;
    }

    /**
     * Get pubdate
     *
     * @return \DateTime
     */
    public function getPubdate()
    {
        return $this->pubdate;
    }

    /**
     * Set printdate
     *
     * @param \DateTime $printdate
     *
     * @return BookBook
     */
    public function setPrintdate($printdate)
    {
        $this->printdate = $printdate;

        return $this;
    }

    /**
     * Get printdate
     *
     * @return \DateTime
     */
    public function getPrintdate()
    {
        return $this->printdate;
    }

    /**
     * Set ver
     *
     * @param string $ver
     *
     * @return BookBook
     */
    public function setVer($ver)
    {
        $this->ver = $ver;

        return $this;
    }

    /**
     * Get ver
     *
     * @return string
     */
    public function getVer()
    {
        return $this->ver;
    }

    /**
     * Set deco
     *
     * @param string $deco
     *
     * @return BookBook
     */
    public function setDeco($deco)
    {
        $this->deco = $deco;

        return $this;
    }

    /**
     * Get deco
     *
     * @return string
     */
    public function getDeco()
    {
        return $this->deco;
    }

    /**
     * Set kword
     *
     * @param integer $kword
     *
     * @return BookBook
     */
    public function setKword($kword)
    {
        $this->kword = $kword;

        return $this;
    }

    /**
     * Get kword
     *
     * @return integer
     */
    public function getKword()
    {
        return $this->kword;
    }

    /**
     * Set page
     *
     * @param integer $page
     *
     * @return BookBook
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return integer
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     *
     * @return BookBook
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return BookBook
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return BookBook
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set intro
     *
     * @param string $intro
     *
     * @return BookBook
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set instock
     *
     * @param boolean $instock
     *
     * @return BookBook
     */
    public function setInstock($instock)
    {
        $this->instock = $instock;

        return $this;
    }

    /**
     * Get instock
     *
     * @return boolean
     */
    public function getInstock()
    {
        return $this->instock;
    }

    /**
     * Set place
     *
     * @param \AppBundle\Entity\BookPlace $place
     *
     * @return BookBook
     */
    public function setPlace(\AppBundle\Entity\BookPlace $place = null)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return \AppBundle\Entity\BookPlace
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set publisher
     *
     * @param \AppBundle\Entity\BookPublisher $publisher
     *
     * @return BookBook
     */
    public function setPublisher(\AppBundle\Entity\BookPublisher $publisher = null)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return \AppBundle\Entity\BookPublisher
     */
    public function getPublisher()
    {
        return $this->publisher;
    }
}

