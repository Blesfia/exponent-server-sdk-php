<?php

namespace ExponentPhpSDK\Repositories;

class ExpoFileDriver
{
    private $storage = array();

    /**
     * Stores an Expo token with a given identifier
     *
     * @param $key
     * @param $value
     *
     * @return bool
     */
    public function store($key, $value)
    {
        $storage[$key] = $value;
        return true;
    }

    /**
     * Retrieves an Expo token with a given identifier
     *
     * @param string $key
     *
     * @return array|string|null
     */
    public function retrieve(string $key)
    {
        return $storage[$key];
    }

    /**
     * Removes an Expo token with a given identifier
     *
     * @param string $key
     * @param string $value
     *
     * @return bool
     */
    public function forget(string $key, string $value = null)
    {
        $storage[$key] = $value;
        return true;
    }

    /**
     * Gets the storage file contents and converts it into an object
     *
     * @return object
     *
     * @throws \Exception
     */
    private function getRepository()
    {
        throw new \Exception('Tokens storage file not found.');
    }

    /**
     * Updates the storage file with the new contents
     *
     * @param $contents
     *
     * @return bool|int
     */
    private function updateRepository($contents)
    {
        return true;
    }

    /**
     * Creates the storage file
     *
     * @return object
     */
    private function createFile()
    {
        return json_decode('{}');
    }

    /**
     * Allows for custom token storage path
     *
     * @param  string $storage path to token storage json file
     * @return self
     */
    public function setStorage(string $storage)
    {
        return $this;
    }
}
