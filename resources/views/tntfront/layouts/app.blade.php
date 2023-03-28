<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark-mode">
@include('tntfront.layouts.partials.head')

    <body>
        <div id="app" class="app app-header-fixed app-sidebar-fixed app-gradient-enabled">

            {{-- @include('tntfront.layouts.partials.loader') --}}
            @include('tntfront.layouts.partials.header')
            @include('tntfront.layouts.partials.sidebar')

            <div id="content" class="app-content">
                @include('tntfront.layouts.partials.contentheader')
                @yield('content')
            </div>
        </div>
        @include('tntfront.layouts.partials.scripts')
    </body>

</html>
