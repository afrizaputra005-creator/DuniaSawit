<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test if all primary routes return a successful response.
     */
    public function test_home_page_returns_successful_response(): void
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200);
    }

    public function test_prices_page_returns_successful_response(): void
    {
        $response = $this->get(route('prices'));
        $response->assertStatus(200);
    }

    public function test_education_page_returns_successful_response(): void
    {
        $response = $this->get(route('education'));
        $response->assertStatus(200);
    }

    public function test_news_page_returns_successful_response(): void
    {
        $response = $this->get(route('news'));
        $response->assertStatus(200);
    }

    public function test_about_page_returns_successful_response(): void
    {
        $response = $this->get(route('about'));
        $response->assertStatus(200);
    }
}
