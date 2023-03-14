<?php

namespace KoalaFacade\FilamentNavigationHolder;

use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Illuminate\Support\HtmlString;
use Spatie\LaravelPackageTools\Package;

class FilamentNavigationHolderServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-navigation-holder');
    }

    public function packageBooted(): void
    {
        Filament::registerRenderHook(
            name: 'scripts.start',
            callback: fn () => new HtmlString(html: "
                <script>
                    document.addEventListener('DOMContentLoaded', function(){
                       setTimeout(() => {
                            const activeSidebarItem = document.querySelector('.filament-sidebar-item-active');
                            const sidebarWrapper = document.querySelector('.filament-sidebar-nav')
                            
                            sidebarWrapper.style.scrollBehavior = 'smooth';
                            
                            sidebarWrapper.scrollTo(0, activeSidebarItem.offsetTop - 250)
                       }, 300)
                    });
                </script>
            "));
    }
}
