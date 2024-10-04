<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-base-100 text-base-content">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold mb-5">Welcome to DaisyUI</h1>

        <div class="grid grid-cols-2 gap-4">
            <!-- Primary Color -->
            <div class="bg-primary text-primary-content p-5 rounded-lg shadow-md">
                <h2 class="text-xl">Primary Color</h2>
                <p>This box uses the primary color background.</p>
            </div>

            <!-- Secondary Color -->
            <div class="bg-secondary text-secondary-content p-5 rounded-lg shadow-md">
                <h2 class="text-xl">Secondary Color</h2>
                <p>This box uses the secondary color background.</p>
            </div>

            <!-- Accent Color -->
            <div class="bg-accent text-accent-content p-5 rounded-lg shadow-md">
                <h2 class="text-xl">Accent Color</h2>
                <p>This box uses the accent color background.</p>
            </div>

            <!-- Neutral Color -->
            <div class="bg-neutral text-neutral-content p-5 rounded-lg shadow-md">
                <h2 class="text-xl">Neutral Color</h2>
                <p>This box uses the neutral color background.</p>
            </div>

            <!-- Info Color -->
            <div class="bg-info text-info-content p-5 rounded-lg shadow-md">
                <h2 class="text-xl">Info Color</h2>
                <p>This box uses the info color background.</p>
            </div>

            <!-- Success Color -->
            <div class="bg-success text-success-content p-5 rounded-lg shadow-md">
                <h2 class="text-xl">Success Color</h2>
                <p>This box uses the success color background.</p>
            </div>

            <!-- Warning Color -->
            <div class="bg-warning text-warning-content p-5 rounded-lg shadow-md">
                <h2 class="text-xl">Warning Color</h2>
                <p>This box uses the warning color background.</p>
            </div>

            <!-- Error Color -->
            <div class="bg-error text-error-content p-5 rounded-lg shadow-md">
                <h2 class="text-xl">Error Color</h2>
                <p>This box uses the error color background.</p>
            </div>
        </div>
    </div>
</body>

</html>
