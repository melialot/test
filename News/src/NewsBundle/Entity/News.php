<?php

namespace NewsBundle\Entity;

/**
 * News
 */
class News
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
     * @var string
     */
    private $anounce;

    /**
     * @var string
     */
    private $fulltext;

    /**
     * @var string
     */
    private $author;

    /**
     * @var \DateTime
     */
    private $dateCreate;


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
     * @return News
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
     * Set anounce
     *
     * @param string $anounce
     *
     * @return News
     */
    public function setAnounce($anounce)
    {
        $this->anounce = $anounce;

        return $this;
    }

    /**
     * Get anounce
     *
     * @return string
     */
    public function getAnounce()
    {
        return $this->anounce;
    }

    /**
     * Set fulltext
     *
     * @param string $fulltext
     *
     * @return News
     */
    public function setFulltext($fulltext)
    {
        $this->fulltext = $fulltext;

        return $this;
    }

    /**
     * Get fulltext
     *
     * @return string
     */
    public function getFulltext()
    {
        return $this->fulltext;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return News
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
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return News
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }
}

