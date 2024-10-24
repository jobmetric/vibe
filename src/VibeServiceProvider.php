<?php

namespace JobMetric\Vibe;

use JobMetric\PackageCore\Enums\RegisterClassTypeEnum;
use JobMetric\PackageCore\Exceptions\RegisterClassTypeNotFoundException;
use JobMetric\PackageCore\Exceptions\ViewFolderNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;
use JobMetric\Panelio\Facades\Panelio;
use JobMetric\Panelio\RouteRegistry;
use JobMetric\Vibe\Providers\EventServiceProvider;

class VibeServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @throws RegisterClassTypeNotFoundException
     * @throws ViewFolderNotFoundException
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('vibe')
            ->hasConfig()
            ->hasTranslation()
            ->hasView()
            ->registerClass('event', EventServiceProvider::class, RegisterClassTypeEnum::REGISTER())
            ->registerClass('Vibe', Vibe::class, RegisterClassTypeEnum::SINGLETON());
    }

    public function afterRegisterPackage(): void
    {
        RouteRegistry::addPanel($this->package);
    }

    public function afterBootPackage(): void
    {
        Panelio::addPanel('vibe', [
            'name' => 'vibe::base.panel_name',
            'namespace' => 'JobMetric\Vibe\Http\Controllers',
            'args' => [
                'description' => 'vibe::base.description',
                'icon' => '<i class="ki-duotone ki-abstract-45 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'vibe',
            'position' => 30,
        ]);

        Panelio::addSection('vibe', 'board', [
            'name' => 'vibe::base.sections.board.name',
            'args' => [
                'title' => 'vibe::base.sections.board.title',
                'icon' => '<i class="ki-duotone ki-abstract-27 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'vibe.board',
            'position' => 0,
        ]);

        Panelio::addSection('vibe', 'client', [
            'name' => 'vibe::base.sections.client.name',
            'args' => [
                'title' => 'vibe::base.sections.client.title',
                'icon' => '<i class="ki-duotone ki-scroll fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
            ],
            'permission' => 'vibe.client',
            'position' => 0,
        ]);

        Panelio::addSection('vibe', 'team', [
            'name' => 'vibe::base.sections.team.name',
            'args' => [
                'title' => 'vibe::base.sections.team.title',
                'icon' => '<i class="ki-duotone ki-profile-user fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            ],
            'permission' => 'vibe.team',
            'position' => 0,
        ]);

        Panelio::addSection('vibe', 'system', [
            'name' => 'vibe::base.sections.system.name',
            'args' => [
                'title' => 'vibe::base.sections.system.title',
                'icon' => '<i class="ki-duotone ki-setting-3 fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>',
            ],
            'permission' => 'vibe.system',
            'position' => 0,
        ]);

        Panelio::addSection('vibe', 'report', [
            'name' => 'vibe::base.sections.report.name',
            'args' => [
                'title' => 'vibe::base.sections.report.title',
                'icon' => '<i class="ki-duotone ki-chart-simple fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            ],
            'permission' => 'vibe.report',
            'position' => 0,
        ]);
    }
}
