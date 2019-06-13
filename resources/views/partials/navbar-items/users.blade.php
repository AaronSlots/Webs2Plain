<li class="nav-item">
    <a class="nav-link" href="{{route('groups.index')}}">{{ __('navbar.select_group') }}</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('contacts.index')}}">{{ __('navbar.select_contact') }}</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('cards.index')}}">{{ __('navbar.select_card') }}</a>
</li>

<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{Auth::user()->fullname}} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <table style="min-width:25rem;">
            <tr><td><i>{{__('user.personal_number')}}</i></td><td>{{ Auth::user()->id }}</td></tr>
            <tr><td><i>{{__('user.confirm_number')}}</i></td><td>{{ Crypt::decrypt(Auth::user()->invite_number)}}</td></tr>
            <tr><td colspan="2" style="min-width:20rem;"><a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('navbar.logout') }}
            </a></td></tr>
        </table>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
