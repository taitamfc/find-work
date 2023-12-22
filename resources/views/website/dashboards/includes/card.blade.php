@php
$currentUrl = request()->fullUrl();
@endphp
<style>
li.nav-item.active {
    background-color: #1269DB;
}
a.nav-link {
    color: black;
}
</style>
<div class="cardt card-body">
    <ul class="nav nav-pills nav-fill nav-cv-step">
        <li class="nav-item @if($currentUrl == route('staff.profile.index')) active @endif">
            <a class="nav-link" href="{{ route('staff.profile.index') }}">
                <i class="icon-information"></i> 1. Thông tin cá nhân
            </a>
        </li>
        <li class="nav-item @if(request()->fullUrlIs(route('staff.cv.index') . '*')) active @endif">
            <a class="nav-link" href="{{ route('staff.cv.index') }}">
                <i class="icon-briefcase"></i> 2. Danh sách hồ sơ
            </a>
        </li>
        <li class="nav-item @if($currentUrl == route('staff.experience.index')) active @endif">
            <a class="nav-link" href="{{ route('staff.experience.index') }}">
                <i class="icon-calendar"></i> 3. Kinh nghiệm làm việc
            </a>
        </li>
        <li class="nav-item @if($currentUrl == route('staff.education.index')) active @endif">
            <a class="nav-link" href="{{ route('staff.education.index') }}">
                <i class="icon-book-open"></i> 4. Học vấn
            </a>
        </li>
        <li class="nav-item @if($currentUrl == route('staff.skill.index')) active @endif">
            <a class="nav-link" href="{{ route('staff.skill.index') }}">
                <i class="icon-layers"></i> 5. Kỹ năng chuyên môn
            </a>
        </li>
    </ul>
</div>