<?php
/**
 * Apideck Configuration Class Doc Comment
 * PHP version 7.2
 *
 * @category Class
 * @package  Apideck\Client
 * @author   Apideck team
 * @link     https://apideck.com
 */

namespace Apideck\Client;


class ApideckConfiguration
{
    /**
     * @var Basepath
     */
    protected $basePath;

    /**
     *
     * @var string
     */
    protected $apiKey;

    /**
     *
     * @var string
     */
    protected $appId;

    /**
     *
     * @var string
     */
    protected $consumerId;
    
    /**
     *
     * @var string
     */
    protected $serviceId;

    /**
     * Constructor
     */
    public function __construct(string $apiKey, string $appId, string $consumerId, string $serviceId = '', string $basePath = '' )
    {
        $this->apiKey = $apiKey;
        $this->appId = $appId;
        $this->consumerId = $consumerId;
        $this->serviceId = $serviceId;
        $this->basePath = $basePath;
    }

    /**
     * Get the value of basePath
     *
     * @return  Basepath
     */ 
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * Get the value of apiKey
     *
     * @return  string
     */ 
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Get the value of appId
     *
     * @return  string
     */ 
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Get the value of consumerId
     *
     * @return  string
     */ 
    public function getConsumerId()
    {
        return $this->consumerId;
    }

    /**
     * Get the value of serviceId
     *
     * @return  string
     */ 
    public function getServiceId()
    {
        return $this->serviceId;
    }
}