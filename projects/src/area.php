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
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                    Area Calculator
                </li>
            </ol>

            <form action="./area.php" method="post">
                <div class="flex flex-col gap-3 items-center bg-neutral-600 rounded-lg py-10">
                    <div class=" py-2 bg-neutral-50 border w-96 rounded-lg px-3 flex flex-col items-end">
                        <h1 class=" text-xl font-medium font-mono text-neutral-600">Result...</h1>
                        <?php
                        if (empty($_POST["width"] || empty($_POST["breadth"]))) {
                            header("location:area.php");
                        }
                        $width = $_POST["width"];
                        $breadth = $_POST["breadth"];
                        $area = $width * $breadth;
                        $fileName = "areaHistory.txt";
                        if (!file_exists($fileName)) {
                            touch($fileName);
                        };

                        $fileStream = fopen($fileName, "a");
                        fwrite($fileStream, "\n$width * $breadth = $area;");
                        fclose($fileStream);
                        ?>
                        <p class=" text-xl font-medium font-mono text-neutral-500">
                            <?= $area ?> sqft
                        </p>
                    </div>
                    <div class="relative w-96">
                        <input name="width" type="number" class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Enter width">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                            <svg class="flex-shrink-0 w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z" />
                                <circle cx="16.5" cy="7.5" r=".5" />
                            </svg>
                        </div>
                    </div>

                    <div class="relative w-96">
                        <input name="breadth" type="number" class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-700 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Enter breadth">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                            <svg class="flex-shrink-0 w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z" />
                                <circle cx="16.5" cy="7.5" r=".5" />
                            </svg>
                        </div>
                    </div>

                    <button type="submit" class="w-96 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 dark:bg-white dark:text-gray-800">
                        Calculate
                    </button>

                    <a href="./areaHistory.php" class="w-96 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 dark:bg-white dark:text-gray-800">
                        See History
                    </a>
                </div>
            </form>
        </div>
    </main>

    <script src="../node_modules/preline/dist/preline.js"></script>
</body>

</html>