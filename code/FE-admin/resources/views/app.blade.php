<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

        {{-- Inline script to detect system dark mode preference and apply it immediately --}}
        <script>
            {{--(function() {--}}
            {{--    const appearance = '{{ $appearance ?? "system" }}';--}}

            {{--    if (appearance === 'system') {--}}
            {{--        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;--}}

            {{--        if (prefersDark) {--}}
            {{--            document.documentElement.classList.add('dark');--}}
            {{--        }--}}
            {{--    }--}}
            {{--})();--}}

           var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
        </script>

        <link rel="stylesheet" href="../assets/plugins/global/plugins.bundle.css" type="text/css">
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">

        {{-- Inline style to set the HTML background color based on our theme in app.css --}}
{{--        <style>--}}
{{--            html {--}}
{{--                background-color: oklch(1 0 0);--}}
{{--            }--}}

{{--            html.dark {--}}
{{--                background-color: oklch(0.145 0 0);--}}
{{--            }--}}
{{--        </style>--}}

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/js/app.ts', "resources/js/pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body id="kt_body" class="font-sans auth-bg bgi-size-cover bgi-position-center bgi-no-repeat">
        @inertia

        <script src="../assets/plugins/global/plugins.bundle.js"></script>
        <script src="../assets/js/scripts.bundle.js"></script>
    </body>
</html>
