<?php

namespace objects;

/**
 * Class Message
 *
 * @package objects
 */
class Message
{
    /**
     * Text message type
     */
    const TYPE_TEXT = 'text';

    /**
     * Link message type
     */
    const TYPE_LINK = 'link';

    /**
     * Picture message type
     */
    const TYPE_PICTURE = 'picture';

    /**
     * Video message type
     */
    const TYPE_VIDEO = 'video';

    /**
     * @var array
     */
    protected $data = [];

    /**
     * Message constructor.
     *
     * @param $data Message data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Set Message type
     *
     * @param $type
     * @return bool
     */
    public function setType($type)
    {
        $this->data['type'] = $type;

        return true;
    }

    /**
     * Get Message type
     *
     * @return string
     */
    public function getType()
    {
        return $this->data['type'];
    }

    /**
     * Set Message Body
     *
     * @param $body string
     * @return bool
     */
    public function setBody($body)
    {
        $this->data['body'] = $body;

        return true;
    }

    /**
     * Get Message Body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->data['body'];
    }

    /**
     * Set message receiver
     *
     * @param $to string
     * @return bool
     */
    public function setTo($to)
    {
        $this->data['to'] = $to;

        return true;
    }

    /**
     * Get message receiver
     *
     * @return string
     */
    public function getTo()
    {
        return $this->data['to'];
    }

    /**
     * Set chat id
     *
     * @param $chatId
     * @return bool
     */
    public function setChatId($chatId)
    {
        $this->data['chetId'] = $chatId;

        return true;
    }

    /**
     * Get Chat id
     *
     * @return mixed
     */
    public function getChatId()
    {
        return $this->data['chatId'];
    }

    /**
     * Get message data
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}
