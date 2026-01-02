<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- 🔹 LEFT — Upload Form -->
        <div class="p-6 border rounded-xl bg-white shadow">
            <h2 class="text-xl font-semibold mb-4">Upload Files</h2>

            <form method="POST" action="{{  route('file.upload') }}" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Select Files</label>
                    <input
                        type="file"
                        {{-- name="files[]" --}}
                        name="file"
                        {{-- multiple --}}
                        class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-200"
                    >
                </div>

                <button
                    type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Upload
                </button>
            </form>
        </div>

        <!-- 🔹 RIGHT — Uploaded Files List -->
        <div class="p-6 border rounded-xl bg-white shadow">
            <h2 class="text-xl font-semibold mb-4">Uploaded Files</h2>

            <!-- Replace this section with backend loop -->
            <ul class="space-y-3">

                <!-- Example single file item -->
                <li class="flex items-center justify-between p-3 bg-gray-100 rounded-lg">
                    <div>
                        <p class="font-medium">file1.jpg</p>
                        <p class="text-xs text-gray-500">120 KB</p>
                    </div>

                    <a href="/storage/file1.jpg"
                       class="text-blue-500 hover:underline"
                       download>
                        Download
                    </a>
                </li>


            </ul>

            <!-- If no files exist -->
            <!-- <p class="text-gray-500">No files uploaded yet.</p> -->

        </div>

    </div>
</div>




</body>
</html>
