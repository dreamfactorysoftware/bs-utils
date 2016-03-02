<?php namespace DreamFactory\Library\Utility\Bootstrap\Constructs;

class Modal
{
    //******************************************************************************
    //* Members
    //******************************************************************************
    /**
     * @type string
     */
    protected $title;
    /**
     * @type string
     */
    protected $content;
    /**
     * @type array
     */
    protected $buttons;
    /**
     * @type bool
     */
    protected $closable = true;

    //******************************************************************************
    //* Members
    //******************************************************************************

    /**
     * Modal constructor.
     *
     * @param string|null $title
     * @param string|null $content
     * @param array|null  $buttons
     */
    public function __construct($title, $content = null, $buttons = null)
    {
        !empty($buttons) && $this->buttons = $buttons;
        !empty($content) && $this->content = $content;
        !empty($title) && $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Modal
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return Modal
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    public function addButton($text, $attributes = [])
    {
        $this->buttons[] = [
            'text'       => $text,
            'attributes' => $attributes,
        ];

        return $this;
    }

    /**
     * @return array
     */
    public function getButtons()
    {
        return $this->buttons;
    }

    /**
     * @param array $buttons
     *
     * @return Modal
     */
    public function setButtons($buttons)
    {
        $this->buttons = $buttons;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isClosable()
    {
        return $this->closable;
    }

    /**
     * @param boolean $closable
     *
     * @return Modal
     */
    public function setClosable($closable)
    {
        $this->closable = $closable;

        return $this;
    }
}