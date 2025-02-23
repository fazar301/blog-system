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
        <li class="breadcrumb-item text-gray-700 mx-n1 fw-bold ">{{ $slot }}</li>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
    <!--begin::Title-->
    
    <!--end::Title-->
</div>
<!--end::Page title-->