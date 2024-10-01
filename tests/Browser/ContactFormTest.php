<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactFormTest extends DuskTestCase
{
    /**
     * @test
     */
    public function visitContactPage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                ->assertSee('Contato');
        });
    }
    public function testValidContactPage(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                ->assertSee('Nome completo')
                ->assertSee('Email')
                ->assertSee('Mensagem');
        });
    }
    public function testIfContacFormIsWorking(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                ->type('name', 'Bot Bernardo')
                ->type('email', 'bot@gmail.com')
                ->type('message', 'Testando o teste')
                ->press('Enviar mensagem')
                ->waitForText('Sucesso');
        });
    }
}