<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <title>Area Calculator</title>
</head>

<body>
    <main id="areaCalc">
        <div class="container mx-auto px-20 py-5">
            <h1 class=" text-3xl font-serif font-bold mb-8">Calculators</h1>

            <ol class="flex items-center whitespace-nowrap mb-10 p-2 border-y border-gray-200 dark:border-gray-700" aria-label="Breadcrumb">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="../index.php">
                        <svg class="flex-shrink-0 me-3 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                        Home
                    </a>
                    <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </li>
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="./area.php">
                        Area Calculator
                    </a>
                    <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </li>
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                    History
                </li>
            </ol>

            <div class="bg-neutral-600 flex justify-center rounded-lg py-5">
                <div class=" w-96 flex flex-col gap-2">
                    <?php
                    $fileName = "areaHistory.txt";
                    if (!file_exists($fileName)) {
                        touch($fileName);
                    };

                    $fileStream = fopen($fileName, "r");
                    while (!feof($fileStream)) :
                        $content = fgets($fileStream);
                        if ($content === "\n" || $content === "* = 0;") {
                            continue;
                        }
                    ?>

                        <p class=" font-mono font-bold text-xl py-1 px-2 rounded-lg  bg-neutral-300">
                            <?= $content; ?>
                        </p>

                    <?php endwhile ?>

                    <a href="./area.php" class="w-96 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 dark:bg-white dark:text-gray-800">
                        Calculate Again...
                    </a>
                </div>
            </div>
        </div>
    </main>

    <script src="../node_modules/preline/dist/preline.js"></script>
</body>

</html>