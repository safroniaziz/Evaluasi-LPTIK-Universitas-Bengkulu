<li class="header" style="font-weight:bold;">MENU UTAMA</li>
<li class="{{ set_active('operator.dashboard') }}">
    <a href="{{ route('operator.dashboard') }}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
</li>

<li class="{{ set_active('operator.indikator') }}">
    <a href="{{ route('operator.indikator') }}">
        <i class="fa fa-edit"></i> <span>Manajemen Indikator</span>
    </a>
</li>

<li class="header" style="font-weight:bold;">LAPORAN</li>
<li class="{{ set_active('operator.laporan.per_prodi') }}">
    <a href="{{ route('operator.laporan.per_prodi') }}">
        <i class="fa fa-bar-chart"></i> <span>Laporan Per Prodi</span>
    </a>
</li>

<li class="{{ set_active('operator.laporan.per_fakultas') }}">
    <a href="{{ route('operator.laporan.per_fakultas') }}">
        <i class="fa fa-pie-chart"></i> <span>Laporan Per Fakultas</span>
    </a>
</li>

<li class="{{ set_active('operator.laporan.keseluruhan') }}">
    <a href="{{ route('operator.laporan.keseluruhan') }}">
        <i class="fa fa-line-chart"></i> <span>Laporan Keseluruhan</span>
    </a>
</li>

<li style="padding-left:2px;">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        <i class="fa fa-power-off text-danger"></i>{{__('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

</li>