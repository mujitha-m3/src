<?php 
    $title ="Exercise 4";
    $h1 = "Exercise 4: Control flow and loops";
    include 'header.php'; 
?>

        <section id="plan">
            <div class="tourPlan">
                <div class="row">
                    <div class="col text-center">
                        <h1><?php echo $h1 ?></h1>
                    </div>
                </div>

                <h3>01. Create a file (ex4.php): Create a file named ex4.php in your exercise folder. Ensure that it uses the 
                    ame layout as your other pages and that your navigation bar includes a link to this exercise.</h3>

                <br>
                <h3>02. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she 
                    is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h3>
              
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" required><br><br>

                        <label for="age">Age:</label><br>
                        <input type="number" id="age" name="age" min="1" required><br><br>

                        <input type="submit" value="Check Eligibility">
                    </form>

                    <?php

                        if (isset($_POST['name']) && isset($_POST['age'])) {
                            $name = $_POST['name'];
                            $age = $_POST['age'];

                            if ($age >= 18) {
                                echo "<h4>Congratulations, {$name}! You are eligible for voting.</h4>";
                            } else {
                                echo "<h4>Sorry, {$name}. You are not yet eligible for voting. You must be at least 18 years old to vote.</h4>";
                            }
                        }

                    ?>

                <br>
                <h3>03. Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
                    depending on whether it's August or not: </h3>

                    <ul>
                        <li>It's August, so it's still holiday.</li>
                        <li>Not August, this is Month-name so I don't have any holidays</li>
                        <li>Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</li>
                    </ul>
                    
                    <?php
                        $currentMonth = date('F');
                        switch ($currentMonth) {
                            case 'August':
                                echo "<h4>It's August, so it's still holiday.</h4>";
                                break;
                            default:
                                echo "<h4 style='color: blue;'>Not August, this is $currentMonth so I don't have any holidays</h4>";
                        }
                    ?>
                <br>

                <h3>04. For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="number">Enter a number:</label><br>
                    <input type="number" id="number" name="multiplicationNumber" min="1" required><br><br>
                    <input type="submit" value="Generate">
                </form>

                <?php

                    if (isset($_POST['multiplicationNumber'])) {
                        $multiplicationNum = $_POST['multiplicationNumber'];

                        for ($i = 1; $i <= 12; $i++) {
                            echo "$multiplicationNum x $i = " . $multiplicationNum * $i . "<br>";
                        }
                    }

                ?>
                <br>

                <h3>05. While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input).</h3>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="number">Enter a number:</label><br>
                    <input type="number" id="number" name="number" min="1" required><br><br>
                    <input type="submit" value="Generate">
                </form>

                <?php

                    if (isset($_POST['number'])) {
                        $number = $_POST['number'];
                        $i = 1;
                        while ($i <= $number) {
                            echo $i ."<br>";
                            $i++;
                        }
                    }

                ?>
                <br>

                <h3>06. Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>
                <?php
                    
                    $myarray= array("HTML", "CSS", "PHP", "JavaScript");
                    foreach ($myarray as $value) {
                        echo $value . "<br>";
                    }
                ?>
               
        </section>
<?php include 'footer.php'; ?>