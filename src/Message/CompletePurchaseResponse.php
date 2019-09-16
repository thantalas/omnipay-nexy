<?php
namespace Omnipay\Nexi\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * CompletePurchase Response
 *
 * This is the response class for all Nexi CompletePurchase requests.
 *
 * @see \Omnipay\Nexi\Gateway
 */
class CompletePurchaseResponse extends AbstractResponse
{
    public function isSuccessful()
    {
    	$esito = $this->getRequest()->getHttpRequest()->query->get('esito');
    	return (!empty($esito)) ? (strtolower($esito) == 'ok') : false ;
    }

    public function getMessage()
    {
    	$message = $this->getRequest()->getHttpRequest()->query->get('messaggio');
    	return  (!empty($message)) ?  $message: null;
    }
    public function getTransactionReference()
    {
    	$reference = $this->getRequest()->getHttpRequest()->query->get('codAut');
    	return (!empty($reference)) ? strip_tags($reference) : '' ;
    }
 
}
