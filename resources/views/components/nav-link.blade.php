@props(['active'])
<div data-kt-menu-placement="bottom-start" data-kt-menu-offset="-400,0" class="{{ $active ? 'here menu-here-bg' : '' }} menu-item menu-lg-down-accordion me-0 me-lg-2">
    <!--begin:Menu link-->
    <a {{ $attributes }} class="menu-link">
        <span class="menu-title">{{ $slot }}</span>
    </a>
    <!--end:Menu link-->
</div>