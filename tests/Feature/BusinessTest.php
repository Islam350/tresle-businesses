<?php

namespace Tests\Feature;

use App\Models\Business;
use Tests\TestCase;

class BusinessTest extends TestCase
{
    /**
     * A test of business create.
     *
     * @return void
     */
    public function testBusinessCreate()
    {
        $response = $this->json('POST', '/api/businesses', Business::factory()->raw());
        $response->assertCreated();
        $response->assertJsonPath('success', true);
        return $response['data'];
    }
    /**
     * A test of business index.
     *
     * @return void
     */
    public function testBusinessIndex()
    {
        $response = $this->json('GET', '/api/businesses', []);
        $response->assertOk();
        $response->assertJsonPath('success', true);
    }

    /**
     * A test of business show.
     *
     * @param $item
     * @return void
     * @depends testBusinessCreate
     */
    public function testBusinessShow($item)
    {
        $response = $this->json('GET', '/api/businesses/'.(data_get($item,'id')), []);
        $response->assertOk();
        $response->assertJsonPath('success', true);
    }

    /**
     * A test of business update.
     *
     * @param $item
     * @return void
     * @depends testBusinessCreate
     */
    public function testBusinessUpdate($item)
    {
        $new_values=Business::factory()->raw();
        $response = $this->json('POST', '/api/businesses/'.(data_get($item,'id')),
            $new_values + ['_method' => 'PUT']);
        $response->assertOk();
        $response->assertJsonPath('success', true);
        foreach($new_values as $k=>$v)
            $response->assertJsonPath("data.$k", $v);

    }

    /**
     * A test of business delete.
     *
     * @param $item
     * @return void
     * @depends testBusinessCreate
     */
    public function testBusinessDelete($item)
    {
        $response = $this->json('POST', '/api/businesses/'.(data_get($item,'id')),
            ['_method' => 'DELETE']);
        $response->assertOk();
        $response->assertJsonPath('success', true);
    }
}
