<?php 
$spendings = ["apple" => 100, "orange" => 150];
$incomes = ["okozukai" => 10000, "partTimeSalary" => 35000];
echo findTotlIncomes($incomes);

function findTotlIncomes($incomes)
{
    $totalIncomes = 0;
    foreach ($incomes as $income) {
        $totalIncomes += $income;
    }
    return $totalIncomes;
}
