<?php
namespace Omnipay\Nexi\Message;

use Omnipay\Nexi\Message\AbstractRequest;
use Omnipay\Nexi\Message\CompletePurchaseResponse;
use Omnipay\Common\Message\ResponseInterface;


class CompletePurchaseRequest extends AbstractRequest
{
	public function getData(){
		return $this->getParameters();
	}
    public function sendData($data)
    {
   
    	return $this->response = new CompletePurchaseResponse($this, $data);
    }
}
