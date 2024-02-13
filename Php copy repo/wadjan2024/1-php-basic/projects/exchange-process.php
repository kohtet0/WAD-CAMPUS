<?php



// print_r($_POST);

$amount = $_POST["amount"];
$form_currency_arr = explode("-", $_POST["from_currency"]);
$from_currency_name = $form_currency_arr[0];
$from_currency_rate = str_replace(',', '', $form_currency_arr[1]);

$to_currency_arr = explode("-", $_POST["to_currency"]);
$to_currency_name = $to_currency_arr[0];
$to_currency_rate =  str_replace(',', '', $to_currency_arr[1]);


$mmk = $amount * ($from_currency_rate);

$to = $mmk / $to_currency_rate;


// echo $to;
?>
<?php include("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>
<section class=" bg-gray-100 p-10 rounded-lg">

    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="#">
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>

        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="index.php">
                Area Calculator
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400 dark:text-neutral-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
            Calculate Result
        </li>
    </ol>

    <hr class="  border-gray-300 my-4">

    <p class=" text-5xl text-center my-10">

        <?= round($to,2) ?>  <?= $to_currency_name ?> 
    </p>


    <div class=" flex gap-3">
        <a href="./index.php" class=" flex-grow  justify-center py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Calculate Again
        </a>

        <a href="./record-list.php" class=" flex-grow justify-center py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500 dark:hover:border-blue-600 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            AlL Record
        </a>
    </div>


</section>