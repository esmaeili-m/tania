<div>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="sidebar-profile clearfix">
                        <div class="profile-img">
                            <img src="assets/images/usrbig.jpg" alt="profile">
                        </div>
                        <div class="profile-info">
                            <h3>حسین حیاتی</h3>
                            <p>خوش آمدید !</p>
                        </div>
                    </div>
                </li>
                <li class="header">-- اصلی</li>
                <li class="active">
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="menu-icon ti-home"></i>
                        <span>خانه</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="index.html">داشبورد 1</a>
                        </li>
                        <li>
                            <a href="pages/dashboard/dashboard2.html">داشبورد 2</a>
                        </li>
                        <li>
                            <a href="pages/dashboard/dashboard3.html">داشبورد 3</a>
                        </li>
                    </ul>
                </li>
                <li class="active" >
                    <a href="/admin/category">
                        <i class="menu-icon ti-menu-alt"></i>
                        <span>دسته بندی ها</span>
                    </a>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="menu-icon ti-receipt"></i>
                        <span>پست ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/admin/post">نمایش پست ها</a>
                        </li>   
                        <li>
                            <a href="/admin/post/create">افزودن پست </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" onClick="return false;" class="menu-toggle">
                        <i class="menu-icon ti-receipt"></i>
                        <span>مقالات </span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/admin/article">نمایش مقالات</a>
                        </li>
                        <li>
                            <a href="/admin/article/create">افزودن مقاله </a>
                        </li>
                    </ul>
                </li>
                <li class="{{Request::routeIs('social') ? 'active': ''}}" >
                    <a href="{{route('social')}}">
                        <i class="menu-icon ti-menu-alt"></i>
                        <span>شبکه های اجتماعی</span>
                    </a>
                </li>
                <li class="{{Request::routeIs('slider') ? 'active': ''}}" >
                    <a href="{{route('slider')}}">
                        <i class="menu-icon ti-menu-alt"></i>
                        <span>اسلایدر</span>
                    </a>
                </li>
                <li class="{{Request::routeIs('services') ? 'active': ''}}" >
                    <a href="{{route('services')}}">
                        <i class="menu-icon ti-menu-alt"></i>
                        <span>سرویس ها</span>
                    </a>
                </li>
                <li class="{{Request::routeIs('postSlider') ? 'active': ''}}" >
                    <a href="{{route('postSlider')}}">
                        <i class="menu-icon ti-menu-alt"></i>
                        <span>اسلایدر محصولات</span>
                    </a>
                </li>
                <li class="{{Request::routeIs('message') ? 'active': ''}}" >
                    <a href="{{route('message')}}">
                        <i class="menu-icon ti-menu-alt"></i>
                        <span>پیام ها</span>
                    </a>
                </li>
                
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation">
                <a href="#skins" data-toggle="tab" class="active">پوسته ها</a>
            </li>
            <li role="presentation">
                <a href="#settings" data-toggle="tab">تنظیمات</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                <div class="demo-skin">
                    <div class="rightSetting">
                        <p>رنگ منو نوار کناری</p>
                        <button type="button" class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">روشن</button>
                        <button type="button" class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">تاریک</button>
                    </div>
                    <div class="rightSetting">
                        <p>رنگ قالب</p>
                        <button type="button" class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">روشن</button>
                        <button type="button" class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">تاریک</button>
                    </div>
                    <div class="rightSetting">
                        <p>پوسته ها</p>
                        <ul class="demo-choose-skin choose-theme list-unstyled">
                            <li data-theme="black" class="actived">
                                <div class="black-theme"></div>
                            </li>
                            <li data-theme="white">
                                <div class="white-theme white-theme-border"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple-theme"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue-theme"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan-theme"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green-theme"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange-theme"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="rightSetting">
                        <p>فضای دیسک</p>
                        <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar"
                                     aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                    <small>26% باقی مانده</small>
                                </span>
                        </div>
                    </div>
                    <div class="rightSetting m-b-15">
                        <p>بارگذاری سرور</p>
                        <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar"
                                     aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                    <small>بسیار بارگذاری شده</small>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                <div class="demo-settings">
                    <p>تنظیمات عمومی</p>
                    <ul class="setting-list">
                        <li>
                            <span>گزارش استفاده از پانل</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-green"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>تغییر مسیر ایمیل</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-blue"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>تنظیمات سیستم</p>
                    <ul class="setting-list">
                        <li>
                            <span>اطلاعیه ها</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-purple"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>به روز رسانی خودکار</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-cyan"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>تنظیمات حساب</p>
                    <ul class="setting-list">
                        <li>
                            <span>آنلاین</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-red"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>مجوز محل سکونت</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-lime"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</div>
