<?php
namespace Tests\Feature;
use Tests\TestCase;
class MathControllerTest extends TestCase
{
    /** @test */
    public function it_can_add_two_numbers_from_controller()
    {
        $response = $this->get('api/add?a=5&b=7');
        $response->assertStatus(200);
        $response->assertJson([
            'result' => 12,
        ]);
    }
}