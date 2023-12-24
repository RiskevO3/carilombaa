<?php
namespace Tests\Feature\Livewire;
use App\Livewire\Auth\Login;
use Livewire\Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function renders_successfully()
    {
        Livewire::test(Login::class)
            ->assertStatus(200);
    }
}
?>