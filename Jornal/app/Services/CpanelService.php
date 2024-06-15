<?php

namespace App\Services;

use GuzzleHttp\Client;

class CpanelService
{
    protected $client;
    protected $host;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->host = env('CPANEL_HOST');
        $this->user = env('CPANEL_USER');
        $this->password = env('CPANEL_PASSWORD');

        $this->client = new Client([
            'base_uri' => "https://{$this->host}:2083/",
            'auth' => [$this->user, $this->password],
            'verify' => false,
        ]);
    }

    public function uploadFile($filePath, $destinationPath)
    {
        $response = $this->client->request('POST', 'execute/Fileman/upload_files', [
            'form_params' => [
                'dir' => $destinationPath,
            ],
            'multipart' => [
                [
                    'name'     => 'file-1',
                    'contents' => fopen($filePath, 'r'),
                ],
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
