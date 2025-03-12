<x-layout>
    <!--begin::Home card-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-20 p-5">
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
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500 mx-n1 fw-bold ">{{ $pageTitle }}
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--end::Breadcrumb And Page Title-->
            </div>
            <!--begin::Section-->
            <div class="mb-17">
                <!--begin::Title-->
                <div class="d-flex flex-stack align-items-center py-4">
                    <h3 class="text-gray-900">Latest Articles, News & Updates</h3>
                    <a href="/blog" class="fs-6 fw-semibold link-primary text-end">View All Blogs</a>
                </div>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-9"></div>
                <!--end::Separator-->
                <!--begin::Row-->
                <div class="row">
                    @if (!$blogs->isEmpty())
                        <div class="col-md-6">
                            <!--begin::Feature post-->
                            <div class="h-100 d-flex flex-column justify-content-between pb-16 pe-lg-6 mb-lg-0 mb-10">
                                <!--begin::Video-->
                                <div class="mb-3">
                                    <img src="/assets/img/{{ $blogs[0]->thumb }}" alt="" class="embed-responsive-item card-rounded h-275px w-100">
                                </div>
                                <!--end::Video-->
                                <!--begin::Body-->
                                <div class="mb-3">
                                    <!--begin::Title-->
                                    <a href="/blog/{{ $blogs[0]->slug }}" class="fs-2 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">{{ $blogs[0]->title }}</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-4">{{ Str::limit($blogs[0]->body,350) }}</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="d-flex flex-stack flex-wrap">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center pe-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-3">
                                            <img alt="" src="assets/media/avatars/{{ $blogs[0]->author_pic }}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Text-->
                                        <div class="fs-5 fw-bold">
                                            <a href="/author/{{ $blogs[0]->author->username }}" class="text-gray-700 text-hover-primary">{{ $blogs[0]->author->name }}</a>
                                            <span class="text-muted">on {{ $blogs[0]->created_at->diffForHumans() }}</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Label-->
                                    <x-category-label category="{{ $blogs[0]->categorie->name }}" href="/categorie/{{ $blogs[0]->categorie->slug }}">{{ Str::upper($blogs[0]->categorie->name) }}</x-category-label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Feature post-->
                        </div>
                    @endif
                    <!--begin::Col-->
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
                                    <a href="/blog/{{ $blog->slug }}" class="fw-bold text-gray-900 mb-4 fs-2 lh-base text-hover-primary">{{ $blog->title }}</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-semibold fs-5 mt-4 text-gray-600 text-gray-900">{{ Str::limit($blog->body,100) }}</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="d-flex flex-stack flex-wrap">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center pe-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-3">
                                            <img src="assets/media/avatars/{{ $blog->author_pic }}" class="" alt="" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Text-->
                                        <div class="fs-5 fw-bold">
                                            <a href="/author/{{ $blog->author->username }}" class="text-gray-700 text-hover-primary">{{ $blog->author->name }}</a>
                                            <span class="text-muted">on {{ $blog->created_at->diffForHumans() }}</span>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Label-->
                                    <x-category-label category="{{ $blog->categorie->name }}" href="/categorie/{{ $blog->categorie->slug }}">{{ Str::upper($blog->categorie->name) }}</x-category-label>
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
        </div>
        <!--end::Body-->
    </div>
    <!--end::Home card-->
</x-layout>