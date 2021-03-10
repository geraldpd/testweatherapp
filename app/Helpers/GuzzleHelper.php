<?php
namespace App\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class GuzzleHelper {

	public function processRequest($url, $parameters)
	{
		//set the guzzle options
		$client = new Client();

		try
		{
			$response = $client->request('GET', $url, ['query' => $parameters]);
		}
		catch (ClientException $e)
		{
			if (!$e->hasResponse()) return 'error_with_no_response';

			$response = $e->getResponse();
			$fetched_response = [
				//'client' => $client, //!do not include in production.
				'parameters' => $parameters,
				'status_code' => $response->getStatusCode(),
				'reason' => $response->getReasonPhrase(),
				'body' => (string) $response->getBody()
			];

			return $fetched_response;
		}

		$content_response = $response->getBody()->getContents();

		return collect(json_decode($content_response))->all();
	}
}