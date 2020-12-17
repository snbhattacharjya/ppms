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
        <div class="block block-transparent pull-x pull-t">
            <!-- Reaource -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Resources Attached</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content closed">
                    <!-- Resource List -->
                    <ul class="nav-items mb-0">
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mr-3 ml-2">
                                    <i class="si si-wallet text-success"></i>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Resource Type</div>
                                    <div class="text-success">{{ Auth::user()->attached_to->resource_model() }}</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mr-3 ml-2">
                                    <i class="si si-pencil text-info"></i>
                                </div>
                                <div class="media-body">
                                <div class="font-w600">Resource Name</div>
                                    <div class="text-info">{{ Auth::user()->attached_to->resource->name }}</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- END Resource List -->
                </div>
            </div>
            <!-- END Resource -->
            
            <!-- Activity -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Recent Activity</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content closed">
                    <!-- Activity List -->
                    <ul class="nav-items mb-0">
                        
                    </ul>
                    <!-- END Activity List -->
                </div>
            </div>
            <!-- END Activity -->
        </div>
    </div>
    <!-- END Side Content -->
</aside>