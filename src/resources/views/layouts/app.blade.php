<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Padel Court Booking</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<script type="module">
    import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';

    mermaid.initialize({
        startOnLoad: true,
        theme: 'default',
    });
</script>

<body class="bg-gray-100">

    {{-- Navbar --}}
    @include('components.navbar')

    <div class="container mx-auto p-6">
        {{ $slot ?? '' }}
        @yield('content')
    </div>

</body>
</html>