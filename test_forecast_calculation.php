<?php
// Test script to verify forecast calculation
session_start();

// Include database configuration
define('INCLUDED_SETUP', true);
include 'setup_database.php';

// Test data based on user's example:
// budget=300.00, actual=123.00, forecast should be 177.00 (300 - 123)
$budget = 300.00;
$actual = 123.00;
$amount = 50.00; // New transaction amount

echo "Test Data:\n";
echo "Budget: $budget\n";
echo "Current Actual: $actual\n";
echo "New Transaction Amount: $amount\n";
echo "Expected Forecast: " . ($budget - ($actual + $amount)) . "\n";

// Simulate the corrected calculation
$newActual = $actual + $amount;
$forecast = $budget - $newActual;
$actualPlusForecast = $newActual + $forecast;

echo "\nCorrected Calculation Results:\n";
echo "New Actual: $newActual\n";
echo "Forecast: $forecast\n";
echo "Actual + Forecast: $actualPlusForecast\n";

// Test the database update with a sample query
echo "\nSample SQL Query:\n";
echo "UPDATE budget_data SET \n";
echo "    actual = COALESCE(actual, 0) + $amount,\n";
echo "    forecast = COALESCE(budget, 0) - (COALESCE(actual, 0) + $amount),\n";
echo "    actual_plus_forecast = COALESCE(actual, 0) + COALESCE(forecast, 0)\n";
echo "    WHERE id = 28;\n";

?>