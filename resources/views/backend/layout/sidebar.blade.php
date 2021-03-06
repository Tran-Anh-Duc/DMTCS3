<div class="mdl-layout__drawer">
    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
        <header><a href="{{route('tables.index')}}"><i style="font-size: 40px;color: white" class="fas fa-home"></i>
            </a>Home</header>
    @else
        <header><a href="{{route('tables.index')}}"><i style="font-size: 50px;color: white" class="fas fa-home"></i></a>HOME</header>
    @endif
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">

                    <a class="mdl-navigation__link mdl-navigation__link--current" href="{{route("tables.index")}}">
                        <i class="material-icons" role="presentation">dashboard</i>
                        Table
                    </a>
                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 2)
                        <a class="mdl-navigation__link mdl-navigation__link--current" href="{{route("tables.store")}}">
                            <i class="material-icons" role="presentation">dashboard</i>
                            Create New Table
                        </a>
                    @endif
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">view_comfy</i>
                            Category List
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{route("categories.index")}}">
                                List Category
                            </a>
                        </div>
                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 2)
                            <div class="mdl-navigation">
                                <a class="mdl-navigation__link" href="{{route("categories.store")}}">
                                    Create Category
                                </a>
                            </div>
                        @endif
                    </div>

                    <hr>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">view_comfy</i>
                            Product
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{route("products.list")}}">
                                List Product
                            </a>
                        </div>
                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 2)
                            <div class="mdl-navigation">
                                <a class="mdl-navigation__link" href="{{route('products.create')}}" >
                                    Create New Product
                                </a>
                            </div>
                        @endif
                    </div>
                    <hr>
                    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 2)
                        <a class="mdl-navigation__link" href="{{route("users.list")}}">
                            <i class="material-icons" role="presentation">person</i>
                            Account
                        </a>
                    @endif
                    <div class="mdl-layout-spacer"></div>
                    <hr>
                    <a class="mdl-navigation__link" href="https://github.com/CreativeIT/getmdl-dashboard">
                        <i class="material-icons" role="presentation">link</i>
                        GitHub
                    </a>
                </nav>
            </div>
        </div>
        <div class='scroller__bar' id="scroller__bar"></div>
    </div>
</div>
