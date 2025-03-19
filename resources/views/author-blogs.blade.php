<x-layout>
    <!--begin::Toolbar-->
    <!--end::Toolbar-->
    <!--begin::Home card-->
   
        <!--begin::Post card-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20 p-5">
                <!--begin::Toolbar wrapper-->
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100 mb-5">
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
                            <a href="/author" class="breadcrumb-item text-gray-700 mx-n1 fw-bold ">Author</a>
                            <!--end::Item-->
                            <li class="breadcrumb-item">
                                <i class="ki-outline ki-right fs-7 text-gray-700"></i>
                            </li>
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-500 mx-n1 fw-bold ">{{ $pageTitle }}</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--end::Breadcrumb And Page Title-->
                </div>
                <!--end::Toolbar wrapper-->
                <!--begin::Section-->
                <div class="mb-17">
                    <!--begin::Content-->
                    <!--begin::Search bar-->
                    <div id="kt_docs_search_handler_responsive" class="d-flex align-items-center w-100 py-5" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="d-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden"/>
                            <!--end::Hidden input-->
    
                            <!--begin::Icon-->
                            <i class="ki-magnifier ki-outline fs-2 fs-lg-1 text-gray-500 position-absolute top-50 translate-middle-y ms-5"></i>
                            <!--end::Icon-->
    
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid ps-14" name="search" value="" placeholder="Search..." data-kt-search-element="input"/>
                            <!--end::Input-->
    
                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-6" data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                            </span>
                            <!--end::Spinner-->
    
                            <!--begin::Reset-->
                            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                                <i class="ki-cross ki-outline fs-2 fs-lg-1 me-0"></i>
                            </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->
                        <!--begin::Menu-->
                        <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-400px py-7 px-7 overflow-hidden">
                            <!--begin::Wrapper-->
                            <div data-kt-search-element="wrapper">
                                <!--begin::Categories-->
                                <div data-kt-search-element="categories">
                                    ...
                                </div>
                                <!--end::Categories-->
    
                                <!--begin::Search results-->
                                <div data-kt-search-element="results" class="d-none">
                                    ...
                                </div>
                                <!--end::Search results-->
    
                                <!--begin::Recently viewed-->
                                <div data-kt-search-element="recently-viewed">
                                    ...
                                </div>
                                <!--end::Recently viewed-->
    
                                <!--begin::Empty search-->
                                <div data-kt-search-element="empty" class="text-center d-none">
                                    ...
                                </div>
                                <!--end::Empty search-->
                            </div>
                            <!--end::Wrapper-->
    
                            <!--begin::Preferences-->
                            <div data-kt-search-element="preferences">
                                ...
                            </div>
                            <!--end::Preferences-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Search bar-->
                    <div class="d-flex flex-stack py-4">
                        <!--begin::Title-->
                        <h3 class="text-gray-900">Articles by {{ $author->name }}</h3>
                        <span class="text-muted">Total blogs {{ $totalBlogs }}</span>
                        <!--end::Title-->
                        <!--begin::Link-->
                        {{-- <a href="#" class="fs-6 fw-semibold link-primary">View All Videos</a> --}}
                        <!--end::Link-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed mb-9"></div>
                    <!--end::Separator-->
                    <!--begin::Row-->
                    <div class="row g-10">
                        @foreach ($author->blogs as $blog)
                        <!--begin::Col-->                        
                        <div class="col-md-6 col-lg-4">
                            <!--begin::Feature post-->
                            <div class="card-xl-stretch">
                                <!--begin::Image-->
                                <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/img/{{ $blog->thumb }}')" href="#">
                                </a>
                                <!--end::Image-->
                                <!--begin::Body-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="/blog/{{ $blog->slug }}" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">{{ $blog->title }}</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-semibold fs-5 text-gray-600 text-gray-900 my-4">{{ $blog->body }}</div>
                                    <!--end::Text-->
                                    <!--begin::Content-->
                                    <div class="fs-6 fw-bold d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <!--begin::Author-->
                                            <a href="/author/{{ $blog->author->username }}" class="text-gray-700 text-hover-primary">{{ $author->name }}</a>
                                            <!--end::Author-->
                                            <!--begin::Date-->
                                            <span class="text-muted">on {{ $blog->created_at->format('d M Y') }}</span>
                                            <!--end::Date-->
                                        </div>
                                        <!--begin::Label-->
                                        <x-category-label category="{{ $blog->categorie->name }}" href="/categorie/{{ $blog->categorie->slug }}">{{ Str::upper($blog->categorie->name) }}</x-category-label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Feature post-->
                        </div>
                        <!--end::Col-->
                        @endforeach
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Post card-->
</x-layout>