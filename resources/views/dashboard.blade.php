@extends('panelio::layout.layout')

@section('body')
    <div class="row gy-5 g-xl-10">
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('vibe::base.dashboard.tiles.sells') }}" number="5">
                <i class="ki-duotone ki-compass fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('vibe::base.dashboard.tiles.campaign') }}" number="5">
                <i class="ki-duotone ki-chart-simple fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('vibe::base.dashboard.tiles.teams') }}" number="50">
                <i class="ki-duotone ki-abstract-39 fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('vibe::base.dashboard.tiles.new_opportunities') }}" number="2">
                <i class="ki-duotone ki-map fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <x-tile-statistics name="{{ trans('vibe::base.dashboard.tiles.deals') }}" number="9">
                <i class="ki-duotone ki-abstract-35 fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <x-tile-statistics name="{{ trans('vibe::base.dashboard.tiles.daily_deals') }}" number="1562142">
                <i class="ki-duotone ki-abstract-26 fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
    </div>
@endsection
