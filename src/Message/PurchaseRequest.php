<?php
namespace Omnipay\Nexi\Message;

use Omnipay\Nexi\Message\AbstractRequest;
use Omnipay\Nexi\Message\PurchaseResponse;
use Omnipay\Common\Message\ResponseInterface;


class PurchaseRequest extends AbstractRequest
{
	public function getData(){
		$this->validate('alias', 'importo', 'divisa', 'codTrans', 'url', 'url_back', 'secret_key');
		
		$data = array(
				'alias' => $this->getAlias(),
				'importo' => $this->getAmount() * 100,
				'divisa' => $this->getCurrency(),
				'codTrans' => $this->getCodTrans(),
				'url' =>  $this->getReturnUrl(),
				'url_back' => $this->getCancelUrl(),
				'descrizione' => $this->getDescription(),
				'urlpost' => $this->getPostUrlS2s(),
		);
		
		$this->setMac(sha1(
				'codTrans=' . $data['codTrans'] .
				'divisa=' .   $data['divisa'] .
				'importo=' .  $data['importo'] .
				$this->getSecretKey()
		));
		$data['mac'] = $this->getMac();
		$data['message'] = 'success';
		$data += (array) $this->getCustomerData();
		return $data;
	}
    public function sendData($data)
    {
    	return $this->response = new PurchaseResponse($this, $data);
    }
}
