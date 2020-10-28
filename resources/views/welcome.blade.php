<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Styles -->
</head>

<body class="antialiased">
    <div class="w-screen flex flex-col min-h-screen bg-gray-900 sm:pt-0">
        <div class="flex w-screen h-full justify-center mt-4">
            <h1 class="text-4xl text-gray-200 font-semibold">Tunniplaan Backend</h1>
        </div>
        <div class="w-screen">
            <div class="py-12">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="mt-16">
                        <ul class="md:grid md:grid-cols-2 md:gap-x-16 md:gap-y-16">
                            <li>
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-800 text-white">
                                            <!-- Heroicon name: globe-alt -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg leading-6 font-medium text-gray-300">Õpetajad</h4>
                                        <ul>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Õpetajate päring: <a class="text-indigo-500" href="/api/teachers">/api/teachers</a>
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Ühe õpetaja päringu tegemiseks lisa url'i lõppu {id} milleks on "teacherId"
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Nt: <a class="text-indigo-500" href="/api/teachers/11600">/api/teachers/11600</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-10 md:mt-0">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-800 text-white">
                                            <!-- Heroicon name: globe-alt -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg leading-6 font-medium text-gray-300">Õpperühmad</h4>
                                        <ul>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Õpperühmade päring: <a class="text-indigo-500" href="/api/groups">/api/groups</a>
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Ühe rühma päringu tegemiseks lisa url'i lõppu {id} milleks on "groupId"
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Nt: <a class="text-indigo-500" href="/api/groups/3144">/api/groups/3144</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-10 md:mt-0">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-800 text-white">
                                            <!-- Heroicon name: globe-alt -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg leading-6 font-medium text-gray-300">Klassiruumid</h4>
                                        <ul>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Klassiruumi päring: <a class="text-indigo-500" href="/api/rooms">/api/rooms</a>
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Ühe klassi päringu tegemiseks lisa url'i lõppu {id} milleks on "roomId"
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Nt: <a class="text-indigo-500" href="/api/rooms/4356">/api/rooms/4356</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-10 md:mt-0">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-800 text-white">
                                            <!-- Heroicon name: globe-alt -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg leading-6 font-medium text-gray-300">Nädalad</h4>
                                        <ul>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Nädalate päring: <a class="text-indigo-500" href="/api/weeks/">/api/weeks</a>
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Ühe nädala päringu tegemiseks lisa url'i lõppu {id} milleks on "weekNr"
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Nt: <a class="text-indigo-500" href="/api/weeks/10">/api/weeks/10</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-10 md:mt-0">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-800 text-white">
                                            <!-- Heroicon name: globe-alt -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg leading-6 font-medium text-gray-300">Nädala tunniplaan</h4>
                                        <ul>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Tunniplaani päringu formaat: <a class="text-indigo-500">/api/lessons/{muutuja}={id}&weeks={id}</a>
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                {muutuja} võib olla: <a class="text-indigo-500">groups, teachers, rooms</a>, millele järgneb muutuja id
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Päringu näited:
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Klassiruumi järgi: <a class="text-indigo-500" href="/api/lessons/rooms=4356&weeks=9">/api/lessons/rooms=4356&weeks=9</a>
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Õpetaja järgi: <a class="text-indigo-500" href="/api/lessons/teachers=11784&weeks=9">/api/lessons/teachers=11784&weeks=9</a>
                                            </li>
                                            <li class="mt-2 text-base leading-6 text-gray-500">
                                                Õpperühma järgi: <a class="text-indigo-500" href="/api/lessons/groups=3144&weeks=9">/api/lessons/groups=3144&weeks=9</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
</body>

</html>