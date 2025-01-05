<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="salary.css">
    <title>Salary Slip</title>
</head>
<body>
    <div class="container">
       
        <form method="POST">
            <h1>SALARY SLIP OF EMPLOYEE</h1>
            <fieldset>
                <legend>Employee Information</legend>
                <input type="text" name="employee_name" placeholder="Employee Name" required>
                <input type="number" name="employee_id" placeholder="Employee ID" required>
            </fieldset>
            <fieldset>
                <legend>Salary Details</legend>
                <input type="number" name="basic_salary" placeholder="Basic Salary" required>
                <input type="number" name="daily_allowance" placeholder="Daily Allowance">
                <input type="number" name="travel_allowance" placeholder="Travel Allowance">
                <input type="number" name="house_allowance" placeholder="House Allowance">
                <input type="number" name="medical_allowance" placeholder="Medical Allowance">
                <input type="number" name="pension" placeholder="Pension Deduction">
                <input type="number" name="overtime_hours" placeholder="Overtime Hours (Extra Pay)">
            </fieldset>
            <button type="submit" class="calculate-button" name="calculate-button">Generate Salary Slip</button>
        </form>

     
        <div class="result">
            <?php
            if (isset($_POST['calculate-button'])) {
                $name = $_POST['employee_name'];
                $id = $_POST['employee_id'];
                $basic_salary = $_POST['basic_salary'];
                $daily_allowance = $_POST['daily_allowance'] ;
                $travel_allowance = $_POST['travel_allowance'] ;
                $house_allowance = $_POST['house_allowance'] ;
                $medical_allowance = $_POST['medical_allowance'] ;
                $pension = $_POST['pension'] ;
                $overtime_hours = $_POST['overtime_hours'] ;
                $overtime_pay = $overtime_hours * 100;

                $gross_salary = $basic_salary + $daily_allowance + $travel_allowance + $house_allowance + $medical_allowance + $overtime_pay - $pension;

                echo "<h2>Salary Slip</h2>";
                echo "<p><strong>Employee Name:</strong> $name</p>";
                echo "<p><strong>Employee ID:</strong> $id</p>";
                echo "<p><strong>Basic Salary:</strong> $basic_salary</p>";
                echo "<p><strong>Daily Allowance:</strong> $daily_allowance</p>";
                echo "<p><strong>Travel Allowance:</strong> $travel_allowance</p>";
                echo "<p><strong>House Allowance:</strong> $house_allowance</p>";
                echo "<p><strong>Medical Allowance:</strong> $medical_allowance</p>";
                echo "<p><strong>Pension Deduction:</strong> $pension</p>";
                echo "<p><strong>Overtime Pay:</strong> $overtime_pay</p>";
                echo "<p><strong>Gross Salary:</strong> $gross_salary</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
