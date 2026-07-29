<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DecodeMyBrain | Admin sign in</title>
    <style>
        :root {
            color-scheme: light;
            --ink: #171513;
            --muted: #6f6961;
            --line: #eadfcf;
            --canvas: #fffaf2;
            --card: #ffffff;
            --yellow: #ffda4d;
            --yellow-dark: #d4a20e;
            --danger-bg: #fff0ea;
            --danger: #a9441b;
            --success-bg: #e8f8ed;
            --success: #227a45;
        }

        * { box-sizing: border-box; }

        body {
            min-height: 100vh;
            margin: 0;
            color: var(--ink);
            background:
                radial-gradient(circle at 8% 8%, rgba(255, 218, 77, .30), transparent 24rem),
                radial-gradient(circle at 96% 95%, rgba(159, 227, 218, .32), transparent 29rem),
                var(--canvas);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        .admin-login {
            display: grid;
            min-height: 100vh;
            place-items: center;
            padding: 32px 20px;
        }

        .login-card {
            width: min(100%, 460px);
            padding: 42px;
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 24px;
            box-shadow: 0 24px 60px rgba(51, 38, 16, .12);
        }

        .brand {
            display: inline-flex;
            align-items: center;
            min-height: 55px;
            margin-bottom: 34px;
        }

        .brand img {
            display: block;
            width: auto;
            max-width: 180px;
            max-height: 58px;
            object-fit: contain;
        }

        h1 {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(2rem, 6vw, 2.6rem);
            line-height: 1.05;
            letter-spacing: -.045em;
        }

        .intro {
            margin: 14px 0 30px;
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.55;
        }

        .notice {
            margin: 0 0 20px;
            padding: 12px 14px;
            border-radius: 10px;
            font-size: .93rem;
            line-height: 1.4;
        }

        .notice--error { color: var(--danger); background: var(--danger-bg); }
        .notice--success { color: var(--success); background: var(--success-bg); }

        .field { margin-bottom: 21px; }

        label {
            display: block;
            color: #37322d;
            font-size: .94rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            min-height: 51px;
            padding: 0 14px;
            color: var(--ink);
            border: 1px solid #d9cdbd;
            border-radius: 10px;
            outline: none;
            background: #fff;
            font: inherit;
            transition: border-color .15s ease, box-shadow .15s ease;
        }

        input::placeholder { color: #a79f96; }
        input:focus { border-color: var(--yellow-dark); box-shadow: 0 0 0 4px rgba(255, 218, 77, .28); }
        input[aria-invalid="true"] { border-color: #d46039; }

        .password-control { position: relative; }
        .password-control input { padding-right: 64px; }
        .password-toggle { position: absolute; top: 50%; right: 8px; transform: translateY(-50%); border: 0; background: transparent; color: #8b6200; cursor: pointer; font: inherit; font-size: .85rem; font-weight: 700; padding: 8px; }

        .field-error {
            display: block;
            margin-top: 7px;
            color: var(--danger);
            font-size: .84rem;
        }

        .submit {
            width: 100%;
            min-height: 53px;
            margin-top: 6px;
            border: 1px solid #d9ad20;
            border-radius: 11px;
            color: #18130c;
            background: var(--yellow);
            box-shadow: 0 5px 0 rgba(190, 140, 0, .14);
            cursor: pointer;
            font: inherit;
            font-weight: 800;
            transition: transform .15s ease, background .15s ease;
        }

        .submit:hover { background: #ffd23c; transform: translateY(-1px); }
        .submit:focus-visible { outline: 3px solid #171513; outline-offset: 3px; }

        .security-note {
            margin: 24px 0 0;
            color: var(--muted);
            font-size: .83rem;
            line-height: 1.5;
            text-align: center;
        }

        @media (max-width: 520px) {
            .admin-login { padding: 18px; }
            .login-card { padding: 30px 24px; border-radius: 18px; }
            .brand { margin-bottom: 27px; }
        }
    </style>
</head>
<body>
    <main class="admin-login">
        <section class="login-card" aria-labelledby="login-heading">
            <a class="brand" href="{{ url('admin') }}" aria-label="DecodeMyBrain admin home">
                <img src="{{ asset('assets/images/zebra_logo.PNG') }}" alt="DecodeMyBrain">
            </a>

            <h1 id="login-heading">Welcome back</h1>
            <p class="intro">Log in to access the DecodeMyBrain administration dashboard.</p>

            @if(Session::has('success'))
                <div class="notice notice--success" role="status">{{ Session::get('success') }}</div>
            @endif
            @if(Session::has('fail'))
                <div class="notice notice--error" role="alert">{{ Session::get('fail') }}</div>
            @endif

            <form method="post" action="{{ url('admin') }}" novalidate>
                @csrf
                <div class="field">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="you@example.com" autocomplete="email" autofocus required aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}" aria-describedby="email-error">
                    @if($errors->has('email'))
                        <span id="email-error" class="field-error">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <div class="password-control">
                        <input id="password" name="password" type="password" autocomplete="current-password" required aria-invalid="{{ $errors->has('password') ? 'true' : 'false' }}" aria-describedby="password-error">
                        <button class="password-toggle" type="button" aria-label="Show password">Show</button>
                    </div>
                    @if($errors->has('password'))
                        <span id="password-error" class="field-error">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <button class="submit" type="submit">Log in</button>
            </form>

            <p class="security-note">Restricted access for authorised administrators only.</p>
        </section>
    </main>
    <script>
        document.querySelectorAll('.password-toggle').forEach(function (button) {
            button.addEventListener('click', function () {
                var input = button.parentElement.querySelector('input');
                var visible = input.type === 'text';
                input.type = visible ? 'password' : 'text';
                button.textContent = visible ? 'Show' : 'Hide';
                button.setAttribute('aria-label', visible ? 'Show password' : 'Hide password');
            });
        });
    </script>
</body>
</html>
