<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome | Pomarejos H1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col justify-center items-center bg-gray-50 min-h-screen">
    <div class="bg-white shadow-lg p-8 rounded-lg w-full max-w-md text-center">
        <h1 class="mb-4 font-bold text-gray-800 text-3xl">Pomarejos H1</h1>
        <p class="mb-6 text-gray-600">
            This is a temporary landing page.<br>
            The creator is currently busy playing silksong.
        </p>
        <div class="flex justify-center">
            <svg class="w-16 h-16 text-blue-400 animate-bounce" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="4" fill="none" />
                <path d="M16 24l6 6 10-10" stroke="currentColor" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <p class="mt-6 text-gray-400 text-sm">© <?= date('Y') ?> Pomarejos H1</p>
    </div>
</body>

</html>