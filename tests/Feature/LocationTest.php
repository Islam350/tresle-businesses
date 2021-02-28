<?php

namespace Tests\Feature;

use App\Models\Business;
use Tests\TestCase;

class LocationTest extends TestCase
{
    /**
     * A test of countries index.
     *
     * @return void
     */
    public function testCountriesIndex()
    {
        $response = $this->json('GET', '/api/countries', []);
        $response->assertOk();
        $response->assertJsonPath('success', true);
    }
    /**
     * A test of countries index.
     *
     * @return void
     */
    public function testRegionsIndex()
    {
        $response = $this->json('GET', '/api/regions', []);
        $response->assertOk();
        $response->assertJsonPath('success', true);
    }
    /**
     * A test of countries index.
     *
     * @return void
     */
    public function testCitiesIndex()
    {
        $response = $this->json('GET', '/api/cities', []);
        $response->assertOk();
        $response->assertJsonPath('success', true);
    }
}
