<?php

namespace objects;

/**
 * Class User represents an user profile data
 * 
 * @package objects
 */
class User
{
    /**
     * Profile first name
     *
     * @var string
     */
    protected $firstName;

    /**
     * Profile last name
     *
     * @var string
     */
    protected $lastName;

    /**
     * Profile picture url
     *
     * @var string
     */
    protected $profilePicUrl;

    /**
     * Profile picture last modified timestamp
     *
     * @var integer
     */
    protected $profilePicLastModified;

    /**
     * User constructor.
     *
     * @param array $data
     */
    public function __construct($data = [])
    {
        $this->setFistName($data['fistName']);
        $this->setLastName($data['lastName']);
        $this->setProfilePicUrl($data['profilePicUrl']);
        $this->setProfilePicLastModified($data['profilePicLastModified']);
    }

    /**
     * Set Profile first name
     *
     * @param $value
     * @return bool
     */
    public function setFistName($value)
    {
        $this->firstName = $value;

        return true;
    }

    /**
     * Get Profile first name
     *
     * @return string
     */
    public function getFistName()
    {
        return $this->firstName;
    }

    /**
     * Set profile last name
     *
     * @param $value
     * @return bool
     */
    public function setLastName($value)
    {
        $this->lastName = $value;

        return true;
    }

    /**
     * Get Profile last name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set Profile Picture
     *
     * @param $value
     * @return bool
     */
    public function setProfilePicUrl($value)
    {
        $this->profilePicUrl = $value;

        return true;
    }

    /**
     * Get Profile Picture
     *
     * @return string
     */
    public function getProfilePicUrl()
    {
        return $this->profilePicUrl;
    }

    /**
     * Set Profile Picture Last Modified
     *
     * @param $value
     * @return bool
     */
    public function setProfilePicLastModified($value)
    {
        $this->profilePicLastModified = $value;

        return true;
    }

    /**
     * Get Profile Picture Last Modified
     *
     * @return int
     */
    public function getProfilePicLastModified()
    {
        return $this->profilePicLastModified;
    }
}
