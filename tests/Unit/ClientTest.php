public function test_client_form_is_visible(): void
{
    $response = $this->actingAs(User::factory()->create())->get('/clients/create');
    $response->assertStatus(200);
    $response->assertSee('Add New Client');
}
