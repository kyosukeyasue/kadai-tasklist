<header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                {{-- トップページへのリンク --}}
                <a class="navbar-brand" href="/">Tasklist</a>

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        @if (Auth::check())
                            <li>{!! link_to_route('tasks.create', 'タスクの追加', [], ['class' => 'btn btn-primary']) !!}</li>
                            <li>{!! link_to_route('logout.get', 'logout', [],  ['class' => 'btn btn-light']) !!}</li>
                        @else
                            <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'btn btn-light']) !!}</li>
                            <li>{!! link_to_route('login', 'login', [], ['class' => 'btn btn-light']) !!}</li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>