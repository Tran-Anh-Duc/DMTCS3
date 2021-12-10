<div class="mdl-layout__drawer">
    <header>darkboard</header>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">

                    <a class="mdl-navigation__link mdl-navigation__link--current" href="{{route("tables.index")}}">
                        <i class="material-icons" role="presentation">dashboard</i>
                        Table
                    </a>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">view_comfy</i>
                            Table List
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{route("tables.store")}}">
                                Create Table
                            </a>
                        </div>
                    </div>

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
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{route("categories.store")}}">
                                Create Category
                            </a>
                        </div>
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
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{route('products.create')}}">
                                Create New Product
                            </a>
                        </div>
                    </div>
                    <hr>
                    <a class="mdl-navigation__link" href="{{route("users.list")}}">
                        <i class="material-icons" role="presentation">person</i>
                        Account
                    </a>
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
