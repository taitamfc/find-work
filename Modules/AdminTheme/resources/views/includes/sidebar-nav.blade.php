<!--navigation-->
<ul class="metismenu" id="menu">
    <li>
        <a href="{{ route('admin.home') }}">
            <div class="parent-icon"><span class="material-symbols-outlined">home</span>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>
    <li class="menu-label">Tài Khoản</li>
    <li>
        <a class="has-arrow" aria-expanded="false" href="javascript:;">
            <div class="parent-icon">
                <span class="material-symbols-outlined">account_circle</span>
            </div>
            <div class="menu-title">Ứng Viên</div>
        </a>
        <ul class="mm-collapse">
            <li> 
                <a href="{{ route('adminuser.index',['type'=>'staff']) }}">
                    <span class="material-symbols-outlined">arrow_right</span>Danh Sách
                </a>
            </li>
            <li> 
                <a href="{{ route('adminpost.index') }}">
                    <span class="material-symbols-outlined">arrow_right</span>Hồ Sơ</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" aria-expanded="false" href="javascript:;">
            <div class="parent-icon">
                <span class="material-symbols-outlined">account_circle</span>
            </div>
            <div class="menu-title">Nhà Tuyển Dụng</div>
        </a>
        <ul class="mm-collapse">
            <li> 
            <a href="{{ route('adminuser.index',['type'=>'employee']) }}">
                    <span class="material-symbols-outlined">arrow_right</span>Danh Sách</a>
            </li>
            <li> 
                <a href="{{ route('adminpost.index') }}">
                    <span class="material-symbols-outlined">arrow_right</span>Tin Đăng</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:;">
            <div class="parent-icon">
                <span class="material-symbols-outlined">account_circle</span>
            </div>
            <div class="menu-title">Công Việc</div>
        </a>
        <ul class="mm-collapse">
            <li> 
                <a href="{{ route('admintaxonomy.index',['type'=>'Career']) }}">
                    <span class="material-symbols-outlined">arrow_right</span>Ngành Nghề
                </a>
            </li>
            <li> 
                <a href="{{ route('admintaxonomy.index',['type'=>'Level']) }}">
                    <span class="material-symbols-outlined">arrow_right</span>Cấp Bậc
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-label">Nhà Tuyển Dụng</li>
</ul>
<!--end navigation-->