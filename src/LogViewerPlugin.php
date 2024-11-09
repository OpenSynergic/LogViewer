<?php

namespace LogViewer;

use App\Classes\Plugin;
use Filament\Panel;
use LogViewer\Pages\LogViewerPage;
use Saade\FilamentLaravelLog\FilamentLaravelLogPlugin;

class LogViewerPlugin extends Plugin
{
    public function boot()
    {
        $this->enablePublicAsset();
    }

    public function onPanel(Panel $panel): void
    {
        $panel->pages([LogViewerPage::class]);
    }

    public function getPluginPage(): ?string
    {
        try {
            return LogViewerPage::getUrl();
        } catch (\Throwable $th) {
            return null;
        }
    }
}
