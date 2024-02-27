<?php
    namespace App\auth0;
    use Auth0\SDK\Auth0;
    use Auth0\SDK\Configuration\SdkConfiguration;
    use GuzzleHttp\Client;
    class Auth0Config {
        protected $auth0;
        protected $client;
        public function __construct() {
            $this->auth0  = new SdkConfiguration(
                strategy: SdkConfiguration::STRATEGY_API,
                domain: 'https://dev-jsew2i55.us.auth0.com',
                audience: ['https://api.laravel-auth0.com'],
              );
            $this->client = new Client();
        }
        public function authorized() {
            try {
                $response  = $this->client->get('https://dev-jsew2i55.us.auth0.com/authorize',[
                    'query' => [
                        'response_type' => 'code', // Ganti dengan 'token' jika Anda ingin token langsung
                        'client_id' => 'your-client-id',
                        'connection' => 'laravel-oauth', // Ganti dengan nama koneksi yang sesuai
                        'redirect_uri' => 'https://yourApp/callback',
                        'scope' => 'openid profile email',
                        'state' => 'STATE',
                    ],
                ]);
                return response()->json([
                    'messages'=>'success get code',
                    'response'=>$response
                ]);
            } catch(\GuzzleHttp\Exception\BadResponseException $e) {
                return response()->json([
                    'messages'=>$e->getMessage()
                ]);
            }
        }
    }
