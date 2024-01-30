<?php 
    $title ="Exercise 1";
    $h1 = "Exercise 1: Getting Started with PHP";
    include 'header.php'; ?>
<section id="plan">
            <div class="tourPlan text-center">
                <div class="row">
                    <div class="col">
                        <h1><?php echo $h1 ?></h1>
                    </div>
                </div>
                <div class="container text-left">
                    <div class="row tourPlanCards">
                        <div class="col-md-12">
                <h3>3.1 Write PHP code to output the following message: </h3>
                    
                    <?php
                    echo "Hello world! My name is \"David\" "; 
                    ?>

                    <h3>3.2 Create a PHP variable named $title and assign it the value 
                        PHP is interesting." Then, use this variable as the content within an h4 (heading 4) element.
                    </h3>
                    <?php 
                        $title = "PHP is interesting.";
                        echo "<h4>$title</h4>";
                    ?>

                    <h3>
                        3.3 Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5. These variables represent the grades 
                        of three students in the course. To display this information, create an HTML table within your PHP code. 
                        The table should be structured with columns for Serial Number (S.n.), Name, and Grade, and it should look like this:
                    </h3>

                    <?php 
                        $g1 = 5;
                        $g2 = 4;
                        $g3 = 5;
                    ?>
                        <table>
                            <td>S.n.</td><td>Name</td><td>Grade</td>
                            <tr>
                                <td>1</td><td>John</td>
                                <td><php echo $g1 ?>
                            </tr>
                            <tr>
                                <td>2</td><td>David</td>
                                <td><php echo $g2 ?></tr>
                            <tr>
                                <td>3</td>
                                <td>Michael</td>
                                <td><php echo $g3 ?>    
                            </tr>
                        </table>
                    <h3>3.4 Take a screenshot that confirms your development environment setup and include it as an image in the "ex1.php" file.</h3>
                    <img src="assets/images/Exe/24.png" alt="Web development environment" style="width: 100%; height: auto;">
<?php include 'footer.php'; ?>