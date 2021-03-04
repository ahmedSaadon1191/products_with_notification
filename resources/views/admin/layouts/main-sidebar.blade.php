<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    {{-- <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ route('upload_form') }}"><img style="height: 50px;"
                src="{{URL::asset('Admin/img/brand/1.jpg')}}" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="{{route('upload_form') }}"><img style="height: 50px;"
                src="{{URL::asset('Admin/img/brand/1.jpg')}}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ route('upload_form') }}"><img style="height: 50px;"
                src="{{URL::asset('Admin/img/brand/1.jpg')}}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="{{ route('upload_form') }}"><img style="height: 50px;"
                src="{{URL::asset('Admin/img/brand/1.jpg')}}" class="logo-icon dark-theme" alt="logo"></a>
    </div> --}}
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('Admin/img/1.jpg')}}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0"> الادمن</h4>

                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">الرئيسيه</li>



            {{-- {{ CATEGORIES }} --}}
            <li class="slide">
                <a class="side-menu__item" href="{{ route('categories.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg>
                    <span class="side-menu__label">الاقسام الرئيسية</span>
                    <span class="badge badge-success side-badge">{{ App\Admin\Category::all()->count() }}</span>
                </a>
            </li>

            {{-- SUB CATEGORIES  --}}
            <li class="slide">
                <a class="side-menu__item" href="{{ route('sub_Categories.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg>
                    <span class="side-menu__label">الاقسام الفرعية</span>
                    <span class="badge badge-success side-badge">{{ App\Admin\SubCategory::all()->count() }}</span>
                </a>
            </li>


            {{-- PRODUCTS --}}
            <li class="slide">
                <a class="side-menu__item" href="{{ route('products.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg>
                    <span class="side-menu__label">المنتجات</span>
                    <span class="badge badge-success side-badge">{{ App\Admin\Product::all()->count() }}</span>
                </a>
            </li>


            {{-- IMAGES PRODUCTS --}}
            <li class="slide">
                <a class="side-menu__item" href="{{ route('imagesProduct.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg>
                    <span class="side-menu__label">صور المنتجات</span>
                    <span class="badge badge-success side-badge">{{ App\Admin\ImageProduct::all()->count() }}</span>
                </a>
            </li>


            {{-- POSTS ABROVAL --}}
            {{-- <li class="slide">
                <a class="side-menu__item" href="{{ route('posts.permisions.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg>
                    <span class="side-menu__label">صور المنتجات</span>
                    <span class="badge badge-success side-badge">{{ App\Admin\ImageProduct::all()->count() }}</span>
                </a>
            </li> --}}
</aside>
<!-- main-sidebar -->
