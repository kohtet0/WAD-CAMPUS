<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <title>App</title>
</head>

<body>
    <main id="root">
        <div class="container mx-auto px-20 py-5">
            <h1 class=" text-3xl font-serif font-bold mb-8">Calculators</h1>
            <div class="grid border rounded-xl shadow-sm divide-y overflow-hidden sm:flex sm:divide-y-0 sm:divide-x dark:border-gray-700 dark:shadow-slate-700/[.7] dark:divide-gray-600">
                <a href="./src/area.php" class="flex flex-col flex-[1_0_0%] bg-white dark:bg-gray-800">
                    <img class="w-full h-auto rounded-t-xl sm:rounded-se-none" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
                    <div class="p-4 flex-1 md:p-5">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                            Area Calculator
                        </h3>
                        <p class="mt-1 text-gray-500 dark:text-gray-400">
                            This is area calculator.
                        </p>
                    </div>
                </a>
                <a href="./src/exchange.php" class="flex flex-col flex-[1_0_0%] bg-white dark:bg-gray-800">
                    <img class="w-full h-auto" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
                    <div class="p-4 flex-1 md:p-5">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                            Exchange Calculator
                        </h3>
                        <p class="mt-1 text-gray-500 dark:text-gray-400">
                            This is exchange calculator.
                        </p>
                    </div>
                </a>
                <a href="./src/review.php" class="flex flex-col flex-[1_0_0%] bg-white dark:bg-gray-800">
                    <img class="w-full h-auto sm:rounded-se-xl" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
                    <div class="p-4 flex-1 md:p-5">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                            Customer Reviews
                        </h3>
                        <p class="mt-1 text-gray-500 dark:text-gray-400">
                            This is customer reviews.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </main>



    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>