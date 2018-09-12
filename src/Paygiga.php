<?php

/**
 * Paygiga Api
 * @author Ömer Doğan <omer_dogan@outlook.com>
 */


class Paygiga
{
	private $baseUrl;
	private $merchantKey;
	private $merchantPassword;
	private $customerId;

	/**
	 * Paygiga constructor.
	 *
	 * @param string $merchantKey
	 * @param string $merchantPassword
	 * @param integer $customerId
	 */

	public function __construct($merchantKey, $merchantPassword,$customerId)
	{
		$this->merchantKey = $merchantKey;
		$this->merchantPassword = $merchantPassword;
		$this->customerId = $customerId;
		$this->baseUrl = 'https://test.paygiga.com/api/';
	}

	/**
	 * @param string $method
	 * @param array $params
	 *
	 * @return mixed|string
	 */

	private function get_call($method,$params = array())
	{
		$uri = $this->baseUrl.$method;

		$post_data = http_build_query($params);

		$ch = curl_init($uri);

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
		curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		$result = curl_exec($ch);

		if (curl_errno($ch)) {
			return curl_error($ch);
		}
		$answer = json_decode($result);

		return $answer;
	}


	/**
	 * @return mixed|string
	 */

	public function getLogin(){
		return $this->get_call('transaction/authenticate',array(
			'merchantKey' => $this->merchantKey,
			'merchantPassword' => $this->merchantPassword,
			'customerId' => $this->customerId ));

	}

	/**
	 * @param string $session
	 *
	 * @return mixed|string
	 */

	public function getBank($session){
		return $this->get_call('getBankList',array('session_id' => $session));
	}

	public function getAmount($session,$banka){

		return $this->get_call('getAvailableAmounts',array(
			'session_id' => $session,
			'minAmount'=>50*100,
			'maxAmount'=>50*800000,
			'customerId' => $this->customerId,
			'bankCode' => $banka,
			));
	}

}