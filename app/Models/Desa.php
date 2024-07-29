<?php
namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Desa extends Model
{
    protected static function getClient()
    {
        return new Client([
            'base_uri' => env('APP_API_URL'),
            'timeout'  => 10.0,
            'headers' => [
                'Authorization' => 'Bearer ' . Session::get('accessToken'),
                'Accept' => 'application/json',
            ],
        ]);
    }

    public static function getAll()
    {
        $client = self::getClient();
        $response = $client->request('GET', '/desawisata');

        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $posts = json_decode($body, true);
            return $posts;
        } else {
            return null;
        }
    }

    public static function getById(int $id)
    {
        $client = self::getClient();
        $response = $client->request('GET', "/desawisata/{$id}");

        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $post = json_decode($body, true);
            return $post;
        } else {
            return null;
        }
    }

   public static function createData(array $data, $file)
{
    $client = self::getClient();

    // Prepare the multipart form data
    $multipartData = [
        [
            'name' => 'json',
            'contents' => json_encode($data),
            'headers' => ['Content-Type' => 'application/json']
        ],
        [
            'name' => 'gambar',
            'contents' => fopen($file->getPathname(), 'r'),
            'filename' => $file->getClientOriginalName()
        ]
    ];

    $response = $client->request('POST', '/desawisata/add', [
        'multipart' => $multipartData
    ]);

    if ($response->getStatusCode() == 201) {
        $body = $response->getBody();
        $post = json_decode($body, true);
        return $post;
    } else {
        return null;
    }
}


    public static function updateData(int $id, array $data)
    {
        $client = self::getClient();
        $response = $client->request('PUT', "/desawisata/{$id}", [
            'json' => $data
        ]);

        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            $post = json_decode($body, true);
            return $post;
        } else {
            return null;
        }
    }

    public static function deleteData(int $id)
    {
        $client = self::getClient();
        $response = $client->request('DELETE', "/desawisata/{$id}");

        if ($response->getStatusCode() == 204) {
            return true;
        } else {
            return false;
        }
    }
}
