<aside id="side-overlay" class="font-size-sm">
    <!-- Side Header -->
    <div class="content-header border-bottom">
        <!-- User Avatar -->
        <a class="img-link mr-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
        </a>
        <!-- END User Avatar -->

        <!-- User Info -->
        <div class="ml-2">
            <a class="link-fx text-dark font-w600" href="javascript:void(0)">{{ Auth::user()->name }}</a>
        </div>
        <!-- END User Info -->

        <!-- Close Side Overlay -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times text-danger"></i>
        </a>
        <!-- END Close Side Overlay -->
    </div>
    <!-- END Side Header -->

    <!-- Side Content -->
    <div class="content-side">
        <p>
            Content..
        </p>
    </div>
    <!-- END Side Content -->
</aside>