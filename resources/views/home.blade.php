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
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content">
    </div>
    <!--end::Content-->
</x-layout>