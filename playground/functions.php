<?php

function printHello() {
    echo 'Hello World';
}

printHello();

// with type and default value
function calculateTax(int $price, float $tax = 0.05, string $taxName = "") {
    return $price * $tax;
}

calculateTax(3000, 0.1);

// type of data
// bool, int, float, string, array, object, callable

// call function with name arguments
// after using name agrument everything needs to be named
calculateTax(300, taxName: "State tax");
calculateTax(tax: 0.2, price: 300);
