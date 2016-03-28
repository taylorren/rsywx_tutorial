<?php

namespace AppBundle\Entity;

/**
 * Lakers
 */
class Lakers
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $year;

    /**
     * @var string
     */
    private $team;

    /**
     * @var integer
     */
    private $selfscore;

    /**
     * @var integer
     */
    private $oppscore;

    /**
     * @var \DateTime
     */
    private $dateplayed;

    /**
     * @var string
     */
    private $winlose;

    /**
     * @var string
     */
    private $remark;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Lakers
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Lakers
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set team
     *
     * @param string $team
     *
     * @return Lakers
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set selfscore
     *
     * @param integer $selfscore
     *
     * @return Lakers
     */
    public function setSelfscore($selfscore)
    {
        $this->selfscore = $selfscore;

        return $this;
    }

    /**
     * Get selfscore
     *
     * @return integer
     */
    public function getSelfscore()
    {
        return $this->selfscore;
    }

    /**
     * Set oppscore
     *
     * @param integer $oppscore
     *
     * @return Lakers
     */
    public function setOppscore($oppscore)
    {
        $this->oppscore = $oppscore;

        return $this;
    }

    /**
     * Get oppscore
     *
     * @return integer
     */
    public function getOppscore()
    {
        return $this->oppscore;
    }

    /**
     * Set dateplayed
     *
     * @param \DateTime $dateplayed
     *
     * @return Lakers
     */
    public function setDateplayed($dateplayed)
    {
        $this->dateplayed = $dateplayed;

        return $this;
    }

    /**
     * Get dateplayed
     *
     * @return \DateTime
     */
    public function getDateplayed()
    {
        return $this->dateplayed;
    }

    /**
     * Set winlose
     *
     * @param string $winlose
     *
     * @return Lakers
     */
    public function setWinlose($winlose)
    {
        $this->winlose = $winlose;

        return $this;
    }

    /**
     * Get winlose
     *
     * @return string
     */
    public function getWinlose()
    {
        return $this->winlose;
    }

    /**
     * Set remark
     *
     * @param string $remark
     *
     * @return Lakers
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }
}

