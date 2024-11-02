<style>
    .icon-component {
        height: 20px;
    }
    .icon-component:hover {
        color: #1E85FF !important;
        animation: ease-in-out .2s;
    }
    .logo-expand {
        height: 55px !important;
    }
</style>

<div class="app-menu">

    <!-- Sidenav Brand Logo -->
    <a href="{{ route('any', 'index') }}" class="logo-box">
        <!-- Light Brand Logo -->
        <div class="logo-light">
            <img src="https://seeklogo.com/images/G/gobierno-de-el-salvador-logo-6E68A237D9-seeklogo.com.png" class="logo-lg logo-expand" alt="Light logo">
            <img src="https://seeklogo.com/images/G/gobierno-de-el-salvador-logo-6E68A237D9-seeklogo.com.png" class="logo-sm" alt="Small logo">
        </div>

        <!-- Dark Brand Logo -->
        <div class="logo-dark">
            <img src="https://seeklogo.com/images/G/gobierno-de-el-salvador-logo-6E68A237D9-seeklogo.com.png" class="logo-lg logo-expand" alt="Dark logo">
            <img src="https://seeklogo.com/images/G/gobierno-de-el-salvador-logo-6E68A237D9-seeklogo.com.png" class="logo-sm" alt="Small logo">
        </div>
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
        <span class="sr-only">Menu Toggle Button</span>
        <i class="mgc_round_line text-xl"></i>
    </button>

    <!--- Menu -->
    <div class="srcollbar" data-simplebar>
        <ul class="menu" data-fc-type="accordion">
            <li class="menu-title">Menu</li>

            <li class="menu-item">
                <a href="{{ route('any', 'index') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('any', 'charts') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_chart_bar_line"></i></span>
                    <span class="menu-text"> Administración </span>
                </a>
            </li>

            <li class="menu-title">Gestión</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"> <box-icon name='user' type='solid' color='#69727a' class="icon-component"></box-icon> </span>
                    <span class="menu-text"> Usuarios </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'list']) }}" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'detail']) }}" class="menu-link">
                            <span class="menu-text">Detail</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'create']) }}" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- mdi:user --}}
            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"> <box-icon name='cog' color='#69727a' class="icon-component" ></box-icon> </span>
                    <span class="menu-text"> Roles </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'list']) }}" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'detail']) }}" class="menu-link">
                            <span class="menu-text">Detail</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'create']) }}" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"> <box-icon name='folder' type='solid' color='#69727a' class="icon-component" ></box-icon> </span>
                    <span class="menu-text"> Modulos </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'list']) }}" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'detail']) }}" class="menu-link">
                            <span class="menu-text">Detail</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'create']) }}" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"> <box-icon name='file' type='solid' color='#69727a' class="icon-component" ></box-icon> </span>
                    <span class="menu-text"> Reportes </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'list']) }}" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'detail']) }}" class="menu-link">
                            <span class="menu-text">Detail</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'create']) }}" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Funciones</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"> <box-icon name='map' color='#69727a' class="icon-component"></box-icon> </span>
                    <span class="menu-text"> Paises </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'login']) }}" class="menu-link">
                            <span class="menu-text">Log In</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'register']) }}" class="menu-link">
                            <span class="menu-text">Register</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'recoverpw']) }}" class="menu-link">
                            <span class="menu-text">Recover Password</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['auth', 'lock-screen']) }}" class="menu-link">
                            <span class="menu-text">Lock Screen</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"> <box-icon name='map-alt' color='#69727a' class="icon-component"></box-icon> </span>
                    <span class="menu-text"> Departamentos </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'starter']) }}" class="menu-link">
                            <span class="menu-text">Starter</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'timeline']) }}" class="menu-link">
                            <span class="menu-text">Timeline</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'invoice']) }}" class="menu-link">
                            <span class="menu-text">Invoice</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'gallery']) }}" class="menu-link">
                            <span class="menu-text">Gallery</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['pages', 'faqs']) }}" class="menu-link">
                            <span class="menu-text">FAQs</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"> <box-icon type='solid' name='institution' color='#69727a' class="icon-component"></box-icon> </span>
                    <span class="menu-text"> Distritos </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'swiper']) }}" class="menu-link">
                            <span class="menu-text">Swiper</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'nestable']) }}" class="menu-link">
                            <span class="menu-text">Nestable List</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'ratings']) }}" class="menu-link">
                            <span class="menu-text">Ratings</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['extended', 'lightbox']) }}" class="menu-link">
                            <span class="menu-text">Lightbox</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"> <box-icon name='school' type='solid' color='#69727a' class="icon-component"></box-icon> </span>
                    <span class="menu-text"> Municipios </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'elements']) }}" class="menu-link">
                            <span class="menu-text">Form Elements</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'select']) }}" class="menu-link">
                            <span class="menu-text">Select</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'range']) }}" class="menu-link">
                            <span class="menu-text">Range</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'pickers']) }}" class="menu-link">
                            <span class="menu-text">Pickers</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'masks']) }}" class="menu-link">
                            <span class="menu-text">Masks</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'editor']) }}" class="menu-link">
                            <span class="menu-text">Editor</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'file-uploads']) }}" class="menu-link">
                            <span class="menu-text">File Uploads</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'validation']) }}" class="menu-link">
                            <span class="menu-text">Validation</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['forms', 'layout']) }}" class="menu-link">
                            <span class="menu-text">Form Layout</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Operaciones</li>

            <li class="menu-item">
                <a href="{{ route('any', 'charts') }}" class="menu-link">
                    <span class="menu-icon"> <box-icon type='solid' name='food-menu' color='#69727a' class="icon-component"></box-icon> </span>
                    <span class="menu-text"> Company </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('any', 'charts') }}" class="menu-link">
                    <span class="menu-icon"> <box-icon name='clipboard' color='#69727a' class="icon-component"></box-icon> </span>
                    <span class="menu-text"> Branch </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('any', 'charts') }}" class="menu-link">
                    <span class="menu-icon"><box-icon name='user-rectangle' type='solid' color='#69727a' class="icon-component"></box-icon></span>
                    <span class="menu-text"> Empleado </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('any', 'charts') }}" class="menu-link">
                    <span class="menu-icon"><box-icon name='list-check' color='#69727a' class="icon-component"></box-icon></span>
                    <span class="menu-text"> Cargo </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Sidenav Menu End  -->
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
