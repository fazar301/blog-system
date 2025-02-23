<x-layout>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10 mb-5">
        <!--begin::Toolbar wrapper-->
        <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
            <!--begin::Breadcrumb And Page Title-->
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1 mx-n1">
                        <a href="/" class="text-hover-primary">
                            <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                        </a>
                    </li>
                    <!--end::Item-->
                    <li class="breadcrumb-item">
                        <i class="ki-outline ki-right fs-7 text-gray-700"></i>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-700 mx-n1 fw-bold ">{{ $pageTitle }}
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
                <!--begin::Title-->
                
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--end::Breadcrumb And Page Title-->
        </div>
        <!--end::Toolbar wrapper-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Home card-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-20">
            <!--begin::Section-->
            <div class="mb-17">
                <!--begin::Title-->
                <h3 class="text-gray-900 mb-7">Latest Articles, News & Updates</h3>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-9"></div>
                <!--end::Separator-->
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <!--begin::Feature post-->
                        <div class="h-100 d-flex flex-column justify-content-between pb-16 pe-lg-6 mb-lg-0 mb-10">
                            <!--begin::Video-->
                            <div class="mb-3">
                                <img src="/assets/img/{{ $blogs[0]['thumb'] }}" alt="" class="embed-responsive-item card-rounded h-275px w-100">
                            </div>
                            <!--end::Video-->
                            <!--begin::Body-->
                            <div class="mb-3">
                                <!--begin::Title-->
                                <a href="/blog/{{ $blogs[0]['id'] }}" class="fs-2 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">{{ $blogs[0]['title'] }}</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-4">{{ Str::limit($blogs[0]['body'],350) }}</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="d-flex flex-stack flex-wrap">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center pe-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-3">
                                        <img alt="" src="assets/media/avatars/{{ $blogs[0]['author_pic'] }}" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Text-->
                                    <div class="fs-5 fw-bold">
                                        <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">{{ $blogs[0]['author'] }}</a>
                                        <span class="text-muted">on {{ $blogs[0]['created_at'] }}</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Label-->
                                <x-category-label category="{{ $blogs[0]['categories'] }}">{{ Str::upper($blogs[0]['categories']) }}</x-category-label>
                                <!--end::Label-->
                            </div>
                            <!--end::Footer-->
                        </div>
                        <!--end::Feature post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 justify-content-between d-flex flex-column">
                        <!--begin::Post-->
                        @foreach ($blogs as $blog)
                            @if ($loop->first) @continue @endif
                            <div class="ps-lg-6 mb-16">
                                <!--begin::Body-->
                                <div class="mb-3">
                                    <!--begin::Title-->
                                    <a href="/blog/{{ $blog['id'] }}" class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">{{ $blog['title'] }}</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">{{ Str::limit($blog['body'],100) }}</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="d-flex flex-stack flex-wrap">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center pe-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-3">
                                            <img src="assets/media/avatars/{{ $blog['author_pic'] }}" class="" alt="" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Text-->
                                        <div class="fs-5 fw-bold">
                                            <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">{{ $blog['author'] }}</a>
                                            <span class="text-muted">on {{ $blog['created_at'] }}</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Label-->
                                    <x-category-label category="{{ $blog['categories'] }}">{{ Str::upper($blog['categories']) }}</x-category-label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Footer-->
                            </div>
                        @endforeach
                        <!--end::Post-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--begin::Row-->
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="mb-17">
                <!--begin::Content-->
                <div class="d-flex flex-stack mb-5">
                    <!--begin::Title-->
                    <h3 class="text-gray-900">Video Tutorials</h3>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <a href="#" class="fs-6 fw-semibold link-primary">View All Videos</a>
                    <!--end::Link-->
                </div>
                <!--end::Content-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-9"></div>
                <!--end::Separator-->
                <!--begin::Row-->
                <div class="row g-10">
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Feature post-->
                        <div class="card-xl-stretch me-md-6">
                            <!--begin::Image-->
                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                                <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                            </a>
                            <!--end::Image-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">on Mar 21 2021</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feature post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Feature post-->
                        <div class="card-xl-stretch mx-md-3">
                            <!--begin::Image-->
                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-74.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                                <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                            </a>
                            <!--end::Image-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">on Apr 14 2021</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feature post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Feature post-->
                        <div class="card-xl-stretch ms-md-6">
                            <!--begin::Image-->
                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-47.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/TWdDZYNqlg4">
                                <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                            </a>
                            <!--end::Image-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Carles Nilson</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">on May 14 2021</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feature post-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Section-->
            <!--begin::Section-->
            <div class="mb-17">
                <!--begin::Content-->
                <div class="d-flex flex-stack mb-5">
                    <!--begin::Title-->
                    <h3 class="text-gray-900">Hottest Bundles</h3>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <a href="#" class="fs-6 fw-semibold link-primary">View All Offers</a>
                    <!--end::Link-->
                </div>
                <!--end::Content-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-9"></div>
                <!--end::Separator-->
                <!--begin::Row-->
                <div class="row g-10">
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Hot sales post-->
                        <div class="card-xl-stretch me-md-6">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-23.jpg">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-23.jpg')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-outline ki-eye fs-2x text-white"></i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Body-->
                            <div class="mt-5">
                                <!--begin::Title-->
                                <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">We’ve been focused on making a the from also not been eye</div>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                    <!--begin::Label-->
                                    <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                    <span class="fs-6 fw-semibold text-gray-500">$</span>28</span>
                                    <!--end::Label-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Hot sales post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Hot sales post-->
                        <div class="card-xl-stretch mx-md-3">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-14.jpg">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x600/img-14.jpg')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-outline ki-eye fs-2x text-white"></i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Body-->
                            <div class="mt-5">
                                <!--begin::Title-->
                                <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">We’ve been focused on making a the from also not been eye</div>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                    <!--begin::Label-->
                                    <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                    <span class="fs-6 fw-semibold text-gray-500">$</span>27</span>
                                    <!--end::Label-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Hot sales post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Hot sales post-->
                        <div class="card-xl-stretch ms-md-6">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-71.jpg">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-71.jpg')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-outline ki-eye fs-2x text-white"></i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Body-->
                            <div class="mt-5">
                                <!--begin::Title-->
                                <a href="#" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">We’ve been focused on making a the from also not been eye</div>
                                <!--end::Text-->
                                <!--begin::Text-->
                                <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                    <!--begin::Label-->
                                    <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                    <span class="fs-6 fw-semibold text-gray-500">$</span>25</span>
                                    <!--end::Label-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                    <!--end::Action-->
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Hot sales post-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Section-->
            <!--begin::latest instagram-->
            <div class="">
                <!--begin::Section-->
                <div class="m-0">
                    <!--begin::Content-->
                    <div class="d-flex flex-stack">
                        <!--begin::Title-->
                        <h3 class="text-gray-900">Latest Instagram Posts</h3>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <a href="#" class="fs-6 fw-semibold link-primary">View Instagram</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed border-gray-300 mb-9 mt-5"></div>
                    <!--end::Separator-->
                </div>
                <!--end::Section-->
                <!--begin::Row-->
                <div class="row g-10 row-cols-2 row-cols-lg-5">
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/16.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/16.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-outline ki-eye fs-3x text-white"></i>
                            </div>
                            <!--end::Action-->
                        </a>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/13.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/13.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-outline ki-eye fs-3x text-white"></i>
                            </div>
                            <!--end::Action-->
                        </a>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/19.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/19.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-outline ki-eye fs-3x text-white"></i>
                            </div>
                            <!--end::Action-->
                        </a>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/15.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/15.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-outline ki-eye fs-3x text-white"></i>
                            </div>
                            <!--end::Action-->
                        </a>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Overlay-->
                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/12.jpg">
                            <!--begin::Image-->
                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/12.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::Action-->
                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                <i class="ki-outline ki-eye fs-3x text-white"></i>
                            </div>
                            <!--end::Action-->
                        </a>
                    </div>
                    <!--end::Col-->
                </div>
                <!--begin::Row-->
            </div>
            <!--end::latest instagram-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Home card-->
</x-layout>