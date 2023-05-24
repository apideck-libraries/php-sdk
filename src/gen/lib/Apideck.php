<?php

namespace Apideck\Client;

use Apideck\Client\Configuration;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\Api\AccountingApi;
use Apideck\Client\Api\AtsApi;
use Apideck\Client\Api\ConnectorApi;
use Apideck\Client\Api\CrmApi;
use Apideck\Client\Api\EcommerceApi;
use Apideck\Client\Api\FileStorageApi;
use Apideck\Client\Api\HrisApi;
use Apideck\Client\Api\IssueTrackingApi;
use Apideck\Client\Api\LeadApi;
use Apideck\Client\Api\PosApi;
use Apideck\Client\Api\SmsApi;
use Apideck\Client\Api\VaultApi;
use Apideck\Client\Api\WebhookApi;

/**
 * Apideck Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   Apideck team
 * @link     https://apideck.com
 */
class Apideck
{
    /**
     * @var AccountingApi
     */
    protected $accounting;

    /**
     * @var AtsApi
     */
    protected $ats;

    /**
     * @var ConnectorApi
     */
    protected $connector;

    /**
     * @var CrmApi
     */
    protected $crm;

    /**
     * @var EcommerceApi
     */
    protected $ecommerce;

    /**
     * @var FileStorageApi
     */
    protected $fileStorage;

    /**
     * @var HrisApi
     */
    protected $hris;

    /**
     * @var IssueTrackingApi
     */
    protected $issueTracking;

    /**
     * @var LeadApi
     */
    protected $lead;

    /**
     * @var PosApi
     */
    protected $pos;

    /**
     * @var SmsApi
     */
    protected $sms;

    /**
     * @var VaultApi
     */
    protected $vault;

    /**
     * @var WebhookApi
     */
    protected $webhook;


  /**
    * @param ApideckConfiguration   $config
    */
  public function __construct(ApideckConfiguration $apideckConfig)
  {
      $config = Configuration::getDefaultConfiguration();
      $config->setApiKeyPrefix('Authorization', 'Bearer');
      $config->setApiKey('Authorization', $apideckConfig->getApikey());
      $config->addDefaultHeader('x-apideck-app-id', $apideckConfig->getAppId());
      $config->addDefaultHeader('x-apideck-consumer-id', $apideckConfig->getConsumerId());
      
      if ($apideckConfig->getBasePath()) {
        $config->setHost($apideckConfig->getBasePath());
      }
      
      if ($apideckConfig->getServiceId()) {
        $config->addDefaultHeader('x-apideck-service-id', $apideckConfig->getServiceId());
      }

      $this->accounting = new AccountingApi(null, $config);
      $this->ats = new AtsApi(null, $config);
      $this->connector = new ConnectorApi(null, $config);
      $this->crm = new CrmApi(null, $config);
      $this->ecommerce = new EcommerceApi(null, $config);
      $this->fileStorage = new FileStorageApi(null, $config);
      $this->hris = new HrisApi(null, $config);
      $this->issueTracking = new IssueTrackingApi(null, $config);
      $this->lead = new LeadApi(null, $config);
      $this->pos = new PosApi(null, $config);
      $this->sms = new SmsApi(null, $config);
      $this->vault = new VaultApi(null, $config);
      $this->webhook = new WebhookApi(null, $config);
  }

  /**
    * Get the value of accounting
    *
    * @return  AccountingApi
    */ 
  public function getAccountingApi()
  {
      return $this->accounting;
  }
  /**
    * Get the value of ats
    *
    * @return  AtsApi
    */ 
  public function getAtsApi()
  {
      return $this->ats;
  }
  /**
    * Get the value of connector
    *
    * @return  ConnectorApi
    */ 
  public function getConnectorApi()
  {
      return $this->connector;
  }
  /**
    * Get the value of crm
    *
    * @return  CrmApi
    */ 
  public function getCrmApi()
  {
      return $this->crm;
  }
  /**
    * Get the value of ecommerce
    *
    * @return  EcommerceApi
    */ 
  public function getEcommerceApi()
  {
      return $this->ecommerce;
  }
  /**
    * Get the value of fileStorage
    *
    * @return  FileStorageApi
    */ 
  public function getFileStorageApi()
  {
      return $this->fileStorage;
  }
  /**
    * Get the value of hris
    *
    * @return  HrisApi
    */ 
  public function getHrisApi()
  {
      return $this->hris;
  }
  /**
    * Get the value of issueTracking
    *
    * @return  IssueTrackingApi
    */ 
  public function getIssueTrackingApi()
  {
      return $this->issueTracking;
  }
  /**
    * Get the value of lead
    *
    * @return  LeadApi
    */ 
  public function getLeadApi()
  {
      return $this->lead;
  }
  /**
    * Get the value of pos
    *
    * @return  PosApi
    */ 
  public function getPosApi()
  {
      return $this->pos;
  }
  /**
    * Get the value of sms
    *
    * @return  SmsApi
    */ 
  public function getSmsApi()
  {
      return $this->sms;
  }
  /**
    * Get the value of vault
    *
    * @return  VaultApi
    */ 
  public function getVaultApi()
  {
      return $this->vault;
  }
  /**
    * Get the value of webhook
    *
    * @return  WebhookApi
    */ 
  public function getWebhookApi()
  {
      return $this->webhook;
  }
}