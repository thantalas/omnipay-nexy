<?php
namespace Omnipay\Nexi\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Dummy Response
 *
 * This is the response class for all Dummy requests.
 *
 * @see \Omnipay\\Nexi\Gateway
 */
class Response extends AbstractResponse
{
    public function isSuccessful()
    {
        return isset($this->data['success']) && $this->data['success'];
    }

    public function getTransactionReference()
    {
        return isset($this->data['reference']) ? $this->data['reference'] : null;
    }

    public function getTransactionId()
    {
        return isset($this->data['reference']) ? $this->data['reference'] : null;
    }

    public function getMessage()
    {
        return isset($this->data['message']) ? $this->data['message'] : null;
    }
    public function isRedirect()
    {
        return true;
    }
    public function getRedirectUrl()
    {
    	
  
    }
 
}
