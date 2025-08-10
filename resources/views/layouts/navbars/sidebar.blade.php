<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini"><i class="las la-user" style="font-size: 2rem"></i></a>
            <a href="#" class="simple-text logo-normal">RR HH</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'home' ) class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Inicio') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="las la-user-friends"></i>
                    <span class="nav-link-text" >{{ __('Personas') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'Lista de Personas') class="active " @endif>
                            <a href="{{ route('personas.index')  }}">
                                <i class="las la-users"></i>
                                <p>{{ __('Lista de Personas') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'Crear Persona') class="active " @endif>
                            <a href="{{ route('personas.create')  }}">
                                <i class="las la-user-plus"></i>
                                <p>{{ __('Crear Persona') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples2" aria-expanded="true">
                    <i class="las la-archive"></i>
                    <span class="nav-link-text" >{{ __('Registros') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse" id="laravel-examples2">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'Lista de Registros') class="active " @endif>
                            <a href="{{ route('registros.index')  }}">
                                <i class="las la-folder-open"></i>
                                <p>{{ __('Lista de Registros') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'Crear Registro') class="active " @endif>
                            <a href="{{ route('registros.create')  }}">
                                <i class="las la-edit"></i>
                                <p>{{ __('Crear Registro') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples3" aria-expanded="true">
                    <i class="las la-ruler-horizontal"></i>
                    <span class="nav-link-text" >{{ __('Parámetros') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse" id="laravel-examples3">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'Lista de Parámetros') class="active " @endif>
                            <a href="{{ route('parametros.index')  }}">
                                <i class="las la-ruler-combined"></i>
                                <p>{{ __('Lista de Parámetros') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'Crear Parámetros') class="active " @endif>
                            <a href="{{ route('parametros.create')  }}">
                                <i class="las la-pencil-ruler"></i>
                                <p>{{ __('Crear Parámetros') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }} bg-info">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
