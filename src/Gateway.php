<?php
namespace Omnipay\Nexi;

use Omnipay\Common\AbstractGateway;

/**
 * Nexi Gateway
 *
 *https://ecommerce.nexi.it/area-test per le carte di test
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Nexi';
    }
    /**
     * Get the gateway alias.

     *
     * @return string
     */
    public function getAlias()
    {
    	return $this->getParameter('alias');
    }
    /**
     * Set alias
     *
     * @param  string $value
     * @return Gateway provides a fluent interface.
     */
    public function setAlias($value)
    {
    	return $this->setParameter('alias', $value);
    }
 
    public function getSecretKey()
    {
    	return $this->getParameter('secret_key');
    }
    /**
     * Set alias
     *
     * @param  string $value
     * @return Gateway provides a fluent interface.
     */
    public function setSecretKey($value)
    {
    	return $this->setParameter('secret_key', $value);
    }
    

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Nexi\Message\PurchaseRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Nexi\Message\CompletePurchaseRequest', $parameters);
    }
}
