<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="start @if(isset($page))
            @if($page == 'dashboard')
            {{ 'active' }}
            @endif
            @endif">
                <a href="">
                    <i class="fa fa-home"></i>
                    <span class="title">@lang('admin.dashboard')</span>
                </a>
            </li>



            <li class="tooltips
            @if(isset($page))
            @if($page == 'orders')
            {{ 'active' }}
            @endif
            @endif
                    " data-container="body" data-placement="right" data-html="true"
                data-original-title="Orders">
                <a href="{{ route('news.create') }}">
                    <i class="fa fa-puzzle-piece"></i>
                    <span class="title">
					         @lang('admin.newsAdd')
                        </span>
                </a>
            </li>
            <li class="tooltips
            @if(isset($page))
            @if($page == 'orders')
            {{ 'active' }}
            @endif
            @endif
                    " data-container="body" data-placement="right" data-html="true"
                data-original-title="Orders">
                <a href="{{ route('news.index') }}">
                    <i class="fa fa-puzzle-piece"></i>
                    <span class="title">
					         @lang('admin.showNews')
                        </span>
                </a>
            </li>


        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>