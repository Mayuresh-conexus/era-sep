<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class DemoPopup extends Page
{
    protected static string $view = 'filament.pages.demo-popup';

    public bool $isOpen = false;

    public function openModal(): void
    {
        $this->isOpen = true;
    }

    public function closeModal(): void
    {
        $this->isOpen = false;
    }
}
