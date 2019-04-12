<div class="calculator">
    <h3>Calculate your monthly payments!</h3>
    <p><i>Note: Please do not enter any special characters ($ , % etc...)</i></p>
    <form method="GET" action="#financing">
        <input type="text" name="price" placeholder="Vehicle Price ($)" value="<?php if (isset($_GET['price'])) { echo $_GET['price']; } ?>">
        <input type="text" name="rate" placeholder="Interest rate (%)" value="<?php if (isset($_GET['rate'])) { echo $_GET['rate']; } ?>">
        <input type="text" name="months" placeholder="Loan Period (months)" value="<?php if (isset($_GET['months'])) { echo $_GET['months']; } ?>">
        <button name="submit" value="submit" type="submit"><b>Calculate</b></button>
    </form>
    <br>
    <div class="result">
        <?php
        $price = $_GET['price'];
        $rate = $_GET['rate'];
        $months = $_GET['months'];
 
        if (isset($_GET['submit'])) {
            $rate = $rate / 100;
            $rate = $rate / 12;
            $numerator = $price * ($rate * pow(1 + $rate, $months));
            $denominator = (pow(1 + $rate, $months) - 1);
            if ($denominator == 0) {
                echo "<b>" . "<p class='error'>&#9888 There was an issue with your numbers, please try again. &#9888</p>" . "</b>";
            } else {
                $result = $numerator / $denominator;
                echo "Your monthly payment is: ";
                echo "<b>$" . number_format($result, 2) . "</b>";
            }

        }

        ?>
    </div>
</div>

