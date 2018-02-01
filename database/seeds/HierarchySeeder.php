<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\ClientException as GuzzleException;

class HierarchySeeder extends Seeder
{
    const OVERPASS_URL = 'http://overpass-api.de/api/interpreter';
    const STATE_QUERY  = '["place"="state"]["is_in:country"="%1$s"]';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = sprintf(self::STATE_QUERY, 'Colombia');
        try {
            $response = (new Guzzle)->post(self::OVERPASS_URL, [
                'form_params' => [
                    'data' => '[out:json];(node'.$query.';rel'.$query.';); out body;',
                ],
            ]);
            $elements = json_decode((string)$response->getBody(), true)['elements'];
            $elements = collect($elements)
                ->map(function($element) {
                    return $element['tags']['name'];
                })->sort()
                ->each(function($element) {
                    DB::connection('geo-hierarchy')->table('co_elements')->insert([
                        'parent_id' => null,
                        'level'     => 1,
                        'name'      => $element,
                    ]);
                });
        } catch( GuzzleException $e ) {}
    }
}
