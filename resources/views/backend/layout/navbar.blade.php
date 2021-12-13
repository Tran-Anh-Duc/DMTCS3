<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <!-- Search-->
{{--        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">--}}
{{--            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">--}}
{{--                <i class="material-icons">search</i>--}}
{{--            </label>--}}

{{--            <div class="mdl-textfield__expandable-holder">--}}
{{--                <input class="mdl-textfield__input" type="text" id="search"/>--}}
{{--                <label class="mdl-textfield__label" for="search">Enter your query...</label>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="avatar-dropdown" id="icon">
            <span>{{\Illuminate\Support\Facades\Auth::user()->name ?? ""}}</span>
            <img src="{{ \Illuminate\Support\Facades\Auth::user()->avatar ?  : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqchnDJ6zreYOFN7Sag4iGQPEhjseY59SfQ-mf9bN2GpE8fcPXGGO3QC0YLVId0xw2zFU&usqp=CAU'}}"
                style="border-radius: 50%; width: 30px; height:30px">
        </div>
        <!-- Account dropdawn-->
        <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
            for="icon">
            <li class="mdl-list__item mdl-list__item--two-line">
                    <span class="mdl-list__item-primary-content row">
                        <span><img
                                src="{{ \Illuminate\Support\Facades\Auth::user()->avatar ?   : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqchnDJ6zreYOFN7Sag4iGQPEhjseY59SfQ-mf9bN2GpE8fcPXGGO3QC0YLVId0xw2zFU&usqp=CAU'}}"
                                style="border-radius: 50%; width: 30px; height:30px"></span>
                        <span>{{\Illuminate\Support\Facades\Auth::user()->role->name ?? ""}}</span>
                        <span
                            class="mdl-list__item-sub-title">{{\Illuminate\Support\Facades\Auth::user()->email ?? ""}}</span>
                    </span>
            </li>
            <li class="list__item--border-top"></li>
            <a href="{{route("auth.logout")}}">
                <li class="mdl-menu__item mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                            Log out
                        </span>
                </li>
            </a>
        </ul>


    </div>
</header>
