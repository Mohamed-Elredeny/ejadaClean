<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">لوحة التحكم</li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span>   الشكاوي  </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("teams.index")}}">عرض الكل</a></li>
                <li><a href="{{route("teams.create")}}">اضافة فريق جديد</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span>   المهام  </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("teams.index")}}">المهام الحالية</a></li>
                <li><a href="{{route("teams.create")}}">المهام قيد الانتظار</a></li>
                <li><a href="{{route("teams.create")}}">المهام المنتهية</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-exclamation-triangle"></i>
                <span>   الملف الشخصي  </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route("teams.index")}}">عرض الملف الشخصي</a></li>
                <li><a href="{{route("teams.create")}}">تعديل الملف الشخصي</a></li>
            </ul>
        </li>

    </ul>
</div>
<!-- Sidebar -->
