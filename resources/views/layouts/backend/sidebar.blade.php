<div class="left-menu">
    <nav class="left-menu-nav">
        <ul class="nav">
            <li class="left-menu-title">Menu Boczne</li>
                <li class="left-menu-item"><a class="left-menu-link" href="{{ url('admin/articles') }}"><i class="left-menu-icon fa fa-plus"></i>#1: Standard</a></li>
            <li class="left-menu-item"><a class="left-menu-link" href="{{ url('admin/posts') }}"><i class="left-menu-icon fa fa-plus"></i> #2: With media</a></li>
            <li class="left-menu-item"><a class="left-menu-link" href="{{ url('admin/translatable-articles') }}"><i class="left-menu-icon fa fa-plus"></i> #3: Translatable</a></li>
            <li class="left-menu-item"><a class="left-menu-link" href="{{ url('admin/exports') }}"><i class="left-menu-icon icon-drop"></i> #4: With export</a></li>
            <li class="left-menu-item"><a class="left-menu-link" href="{{ url('admin/articles-with-relationships') }}"><i class="left-menu-icon fa fa-plus"></i> #5: With relationship</a></li>
            <li class="left-menu-item"><a class="left-menu-link" href="{{ url('admin/bulk-actions') }}"><i class="left-menu-icon fa-plus"></i> #6: Bulk action</a></li>
            <li class="left-menu-item"><a class="left-menu-link" href="{{ url('admin/tags') }}"><i class="left-menu-icon fa fa-plus"></i> #7: Admin trans</a></li>
            <li class="left-menu-title">Menu Admin</li>
            <li class="left-menu-item"><a class="left-menu-link" href="{{ url('admin/admin-users') }}"><i class="left-menu-icon fa fa-plus"></i> {{ __('Manage access') }}</a></li>
            <li class="left-menu-item"><a class="left-menu-link" href="{{ url('admin/translations') }}"><i class="left-menu-icon fa fa-plus"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="left-menu-item"><a class="left-menu-link" href="{{ url('admin/configuration') }}"><i class="left-menu-icon fa fa-plus"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
