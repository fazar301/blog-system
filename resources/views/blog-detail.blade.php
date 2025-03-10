<x-layout>
    <x-slot:title>{{ $pageTitle }}</x-slot:title>
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
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
                    <a href="/blog" class="breadcrumb-item text-gray-700 mx-n1 fw-bold ">Blog</a>
                    <!--end::Item-->
                    <li class="breadcrumb-item">
                        <i class="ki-outline ki-right fs-7 text-gray-700"></i>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-500 mx-n1 fw-bold ">{{ $pageTitle }}</li>
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
    <div id="kt_app_content" class="app-content">
        <!--begin::Post card-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20 pb-lg-0">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-xl-15">
                        <!--begin::Post content-->
                        <div class="mb-17">
                            <!--begin::Wrapper-->
                            <div class="mb-8">
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap mb-6">
                                    <!--begin::Item-->
                                    <div class="me-9 my-1">
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-element-11 text-primary fs-2 me-1"></i>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <span class="fw-bold text-gray-500">{{ $blog->created_at->diffForHumans()}}</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Title-->
                                <p class="text-gray-900 fs-2 fw-bold">{{ $blog->title }}</p>
                                <!--end::Title-->
                                <!--begin::Container-->
                                <div class="overlay mt-8">
                                    <!--begin::Image-->
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('assets/img/{{ $blog->thumb }}')"></div>
                                    <!--end::Image-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Description-->
                            <div class="fs-5 fw-semibold text-gray-600">
                                <!--begin::Text-->
                                <p class="mb-17">{{ $blog->body }}</p>
                                <!--end::Text-->
                            </div>
                            <!--end::Description-->
                            <!--begin::Block-->
                            <div class="d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-10 mb-14">
                                <!--begin::Section-->
                                <div class="text-center flex-shrink-0 me-7 me-lg-13">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-70px symbol-circle mb-2">
                                        <img src="assets/media/avatars/{{ $blog->author_pic }}" class="" alt="" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <a href="/author/{{ $blog->author->username }}" class="text-gray-700 fw-bold text-hover-primary">{{ $blog->author->name }}</a>
                                        <span class="text-gray-500 fs-7 fw-semibold d-block mt-1">Co-founder</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Text-->
                                <div class="mb-0 fs-6">
                                    <div class="text-muted fw-semibold lh-lg mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words per minute and your writing skills are sharp writing a blog post often takes more than a couple.</div>
                                    <a href="pages/user-profile/overview.html" class="fw-semibold link-primary">Author’s Profile</a>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Icons-->
                            <div class="d-flex flex-center">
                                <!--begin::Icon-->
                                <a href="#" class="mx-4">
                                    <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="#" class="mx-4">
                                    <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="#" class="mx-4">
                                    <img src="assets/media/svg/brand-logos/github.svg" class="h-20px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="#" class="mx-4">
                                    <img src="assets/media/svg/brand-logos/behance.svg" class="h-20px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="#" class="mx-4">
                                    <img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-20px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="#" class="mx-4">
                                    <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                                <!--begin::Icon-->
                                <a href="#" class="mx-4">
                                    <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px my-2" alt="" />
                                </a>
                                <!--end::Icon-->
                            </div>
                            <!--end::Icons-->
                        </div>
                        <!--end::Post content-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                        <!--begin::Search blog-->
                        <div class="mb-16">
                            <h4 class="text-gray-900 mb-7">Search Blog</h4>
                            <!--begin::Input group-->
                            <div class="position-relative">
                                <i class="ki-outline ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6"></i>
                                <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Search blog-->
                        <!--begin::Catigories-->
                        <div class="mb-16">
                            <h4 class="text-gray-900 mb-7">Categories</h4>
                            <!--begin::Item-->
                            <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                                <!--begin::Text-->
                                <a href="#" class="text-muted text-hover-primary pe-2">SaaS Solutions</a>
                                <!--end::Text-->
                                <!--begin::Number-->
                                <div class="m-0">24</div>
                                <!--end::Number-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                                <!--begin::Text-->
                                <a href="#" class="text-muted text-hover-primary pe-2">Company News</a>
                                <!--end::Text-->
                                <!--begin::Number-->
                                <div class="m-0">152</div>
                                <!--end::Number-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                                <!--begin::Text-->
                                <a href="#" class="text-muted text-hover-primary pe-2">Events & Activities</a>
                                <!--end::Text-->
                                <!--begin::Number-->
                                <div class="m-0">52</div>
                                <!--end::Number-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                                <!--begin::Text-->
                                <a href="#" class="text-muted text-hover-primary pe-2">Support Related</a>
                                <!--end::Text-->
                                <!--begin::Number-->
                                <div class="m-0">305</div>
                                <!--end::Number-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack fw-semibold fs-5 text-muted mb-4">
                                <!--begin::Text-->
                                <a href="#" class="text-muted text-hover-primary pe-2">Innovations</a>
                                <!--end::Text-->
                                <!--begin::Number-->
                                <div class="m-0">70</div>
                                <!--end::Number-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack fw-semibold fs-5 text-muted">
                                <!--begin::Text-->
                                <a href="#" class="text-muted text-hover-primary pe-2">Product Updates</a>
                                <!--end::Text-->
                                <!--begin::Number-->
                                <div class="m-0">585</div>
                                <!--end::Number-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Catigories-->
                        <!--begin::Recent posts-->
                        <div class="m-0">
                            <h4 class="text-gray-900 mb-7">Recent Posts</h4>
                            <!--begin::Item-->
                            <div class="d-flex flex-stack mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-60px symbol-2by3 me-4">
                                    <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-1.jpg')"></div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="m-0">
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">About Bootstrap Admin</a>
                                    <span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-60px symbol-2by3 me-4">
                                    <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-2.jpg')"></div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="m-0">
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">A yellow sofa</a>
                                    <span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack mb-7">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-60px symbol-2by3 me-4">
                                    <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-3.jpg')"></div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="m-0">
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Our Camra Mega Set</a>
                                    <span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-60px symbol-2by3 me-4">
                                    <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-4.jpg')"></div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="m-0">
                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Time to cook and eat?</a>
                                    <span class="text-gray-600 fw-semibold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Recent posts-->
                    </div>
                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
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
            </div>
            <!--end::Body-->
        </div>
        <!--end::Post card-->
    </div>
</x-layout>