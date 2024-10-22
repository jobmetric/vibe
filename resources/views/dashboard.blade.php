@extends('panelio::layout.layout')


@section('body')
    <div class="row gy-5 g-xl-10">
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <i class="ki-duotone ki-compass fs-2hx text-gray-600">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div class="d-flex flex-column my-2">
                        <span class="fw-semibold fs-3x text-gray-800 lh-3 ls-n2">61</span>
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">{{ trans('vibe::base.dashboard.tiles.sells') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <i class="ki-duotone ki-chart-simple fs-2hx text-gray-600">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </div>
                    <div class="d-flex flex-column my-2">
                        <span class="fw-semibold fs-3x text-gray-800 lh-3 ls-n2">5</span>
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">{{ trans('vibe::base.dashboard.tiles.campaign') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <i class="ki-duotone ki-abstract-39 fs-2hx text-gray-600">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div class="d-flex flex-column my-2">
                        <span class="fw-semibold fs-3x text-gray-800 lh-3 ls-n2">50</span>
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">{{ trans('vibe::base.dashboard.tiles.teams') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <i class="ki-duotone ki-map fs-2hx text-gray-600">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </div>
                    <div class="d-flex flex-column my-2">
                        <span class="fw-semibold fs-3x text-gray-800 lh-3 ls-n2">2</span>
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">{{ trans('vibe::base.dashboard.tiles.new_opportunities') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <i class="ki-duotone ki-abstract-35 fs-2hx text-gray-600">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div class="d-flex flex-column my-2">
                        <span class="fw-semibold fs-3x text-gray-800 lh-3 ls-n2">9</span>
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">{{ trans('vibe::base.dashboard.tiles.deals') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <i class="ki-duotone ki-abstract-26 fs-2hx text-gray-600">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div class="d-flex flex-column my-2">
                        <span class="fw-semibold fs-3x text-gray-800 lh-3 ls-n2">999M</span>
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-400">{{ trans('vibe::base.dashboard.tiles.daily_deals') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
