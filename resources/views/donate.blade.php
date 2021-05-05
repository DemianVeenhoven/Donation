<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Donate</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
</head>
<body>
    <div id="header-wrapper">
	    <div id="header" class="container">
		    <div id="logo">
			    <h1><a href = "{{ route('donations.index') }}">Donations</a></h1>
		    </div>
		    <div id="menu">
                @guest
                    <ul>
                        <li class="{{ Request::is('donations') ? 'current_page_item' : '' }}">
                            <a href = "{{ route('donations.index') }}" accesskey="1" title = "Homepage">Homepage</a>
                        </li>

                        <li class="{{ Request::is('login/create') ? 'current_page_item' : '' }}">
                            <a href="{{ route('login.create') }}" accesskey="2" title="Login">Login</a>
                        </li>

                        <li class="{{ Request::is('register/create') ? 'current_page_item' : '' }}">
                            <a href="{{ route('register.create') }}" accesskey="3" title="Register">Register</a>
                        </li>
                    </ul>
                @endguest
                @auth
                    <ul>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">{{ __('Logout') }}</button>
                            </form>
                        </li>
                    </ul>
                @endauth
		    </div>
	    </div>
    </div>
    @auth
        <p>test</p>
        <p>{{ $checkout->button('Buy') }}</p>
    @endauth
</body>
</html>