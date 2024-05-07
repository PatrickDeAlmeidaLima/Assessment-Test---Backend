<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_book()
    {
        $response = $this->postJson('/books', [
            'name' => 'Book Title',
            'isbn' => '1234567890',
            'value' => 19.99,
        ]);

        $response->assertStatus(201)
            ->assertJson([
                'name' => 'Book Title',
                'isbn' => '1234567890',
                'value' => 19.99,
            ]);
    }


    // Escreva outros testes para os métodos 'index', 'show', 'update' e 'destroy'...
}
