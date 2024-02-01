<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <title>Exchange Calculator</title>
</head>

<body>
    <main id="areaCalc">
        <div class="container mx-auto px-20 py-5">
            <h1 class=" text-3xl font-serif font-bold mb-8">Calculators</h1>
            <ol class="flex items-center whitespace-nowrap p-2 border-y border-gray-200 dark:border-gray-700 mb-8" aria-label="Breadcrumb">
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
                    Exchange Calculator
                </li>
            </ol>

            <form action="./exchange.php" method="post">
                <div class="flex flex-col gap-3 items-center bg-neutral-600 rounded-lg py-10">
                    <div class=" py-2 bg-neutral-50 border w-96 rounded-lg px-3 flex flex-col items-end font-mono">
                        <h1 class=" text-xl font-medium text-neutral-600">Result...</h1>
                        <!-- php code -->
                        <?php
                        if (isset($_POST["from_currency_amount"], $_POST["from_currency_name"], $_POST["to_currency_name"])) {
                            if (empty($_POST["from_currency_amount"])) {
                                header("location:exchange.php");
                            };
                            $fromCurrencyAmount = $_POST["from_currency_amount"];
                            [$fromCurrencyName, $fromCurrencyRate] = explode("-", $_POST["from_currency_name"]);
                            [$toCurrencyName, $toCurrencyRate] = explode("-", $_POST["to_currency_name"]);

                            $mmk = $fromCurrencyAmount * str_replace(",", "", $fromCurrencyRate);

                            $fileName = "exchangeHistory.txt";
                            if (!file_exists($fileName)) {
                                touch($fileName);
                            };
                            $fileStream = fopen($fileName, "a");

                            if ($_POST["to_currency_name"] === "mmk") {
                                echo '<span>' . $mmk . ' mmk</span>';
                                fwrite($fileStream, "\n$fromCurrencyAmount $fromCurrencyName = $mmk $toCurrencyName;");
                            } else {
                                $to = $mmk / str_replace(",", "", $toCurrencyRate);
                                echo '<span>' . round($to, 2) . ' ' . $toCurrencyName . '</span>';
                                fwrite($fileStream, "\n$fromCurrencyAmount $fromCurrencyName = $to $toCurrencyName;");
                            }
                            fclose($fileStream);
                        } else {
                            echo "Please enter your exchange amount";
                        }
                        ?>
                    </div>

                    <?php

                    $content = file_get_contents("http://forex.cbm.gov.mm/api/latest");
                    $obj = json_decode($content);

                    ?>

                    <div>
                        <div class="relative w-96">
                            <input type="number" id="hs-inline-leading-pricing-select-label" name="from_currency_amount" class="py-3 px-4 ps-9 pe-20 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="From Currency">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                <span class="text-gray-500">$</span>
                            </div>
                            <div class="absolute inset-y-0 end-0 flex items-center text-gray-500 pe-px">
                                <label for="hs-inline-leading-select-currency" class="sr-only">Currency</label>
                                <select id="hs-inline-leading-select-currency" name="from_currency_name" class="block w-full border-transparent rounded-lg focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-800">
                                    <!-- php code -->
                                    <?php foreach ($obj->rates as $key => $value) : ?>
                                        <option value="<?= $key ?>-<?= $value ?>"><?= $key ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="relative w-96">
                            <input type="number" disabled id="hs-inline-leading-pricing-select-label" class="py-3 px-4 ps-9 pe-20 block w-full border-gray-200  bg-white shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="To Currency">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                <span class="text-gray-500">$</span>
                            </div>
                            <div class="absolute inset-y-0 end-0 flex items-center text-gray-500 pe-px">
                                <label for="hs-inline-leading-select-currency" class="sr-only">Currency</label>
                                <select id="hs-inline-leading-select-currency" name="to_currency_name" class="block w-full border-transparent rounded-lg focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-800">
                                    <option value="mmk">MMK</option>
                                    <!-- php code -->
                                    <?php foreach ($obj->rates as $key => $value) : ?>
                                        <option value="<?= $key ?>-<?= $value ?>"><?= $key ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="w-96 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 dark:bg-white dark:text-gray-800">
                        Calculate
                    </button>

                    <a href="./exchangeHistory.php" class="w-96 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 dark:bg-white dark:text-gray-800">
                        See History
                    </a>
                </div>
            </form>
        </div>
    </main>

    <script src="../node_modules/preline/dist/preline.js"></script>
</body>

</html>