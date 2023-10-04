<?php
function calc(string $operator, int $nbr1, int $nbr2) {
   switch ($operator) {
    case "+":
        return $nbr1 + $nbr2;
        break;
    case "-":
        return $nbr1 - $nbr2;
        break;
    case "*":
        return $nbr1 * $nbr2;
        break;
    case "%":
        return $nbr1 % $nbr2;
        break;
    case "/":
        if ($nbr2 === 0) {
            return "Cannot divide by 0";
        } else {
            return $nbr1 / $nbr2;
            break;
        }
    default:
        return "Unknown operator"; 
   }
}
?>
