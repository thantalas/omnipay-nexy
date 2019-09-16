<?php
namespace Omnipay\Nexi\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Dummy Response
 *
 * This is the response class for all Nexi purchase requests.
 *
 * @see \Omnipay\Nexi\Gateway
 */
class PurchaseResponse extends AbstractResponse
{
    public function isSuccessful()
    {
    	return false;
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
    	return $this->getRequest()->getEndpoint() . '?' . http_build_query($this->data);
    }
 
}
