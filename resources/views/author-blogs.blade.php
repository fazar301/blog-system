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
                    <a href="/" class="breadcrumb-item text-gray-700 mx-n1 fw-bold ">Author</a>
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
                <!--begin::Section-->
                <div class="mb-17">
                    <!--begin::Content-->
                    <div class="d-flex flex-stack mb-5">
                        <!--begin::Title-->
                        <h3 class="text-gray-900">All Blog by {{ $author->name }}</h3>
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
                        <div class="col-md-4">
                            <!--begin::Feature post-->
                            <div class="card-xl-stretch me-md-6">
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
    </div>
</x-layout>