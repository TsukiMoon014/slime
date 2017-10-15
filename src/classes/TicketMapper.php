<?php

class TicketMapper
{
	private $db;
	private $title;
	private $component;
	private $shortdescription;


	/**
	 * Class Constructor
	 * @param    $db
	 * @param    $title
	 * @param    $component
	 * @param    $shortdescription
	 */
	public function __construct($db, $title, $component, $shortdescription)
	{
		$this->db = $db;
		$this->title = $title;
		$this->component = $component;
		$this->shortdescription = $shortdescription;
	}

	public function getTickets()
	{
		return ['ticket number one','ticket number two','ticket number three'];
	}

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $db
     *
     * @return self
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * @param mixed $component
     *
     * @return self
     */
    public function setComponent($component)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->shortdescription;
    }

    /**
     * @param mixed $shortdescription
     *
     * @return self
     */
    public function setShortDescription($shortdescription)
    {
        $this->shortdescription = $shortdescription;

        return $this;
    }
}