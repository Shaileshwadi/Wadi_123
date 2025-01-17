<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Area.css">
    <title>Area Calculator</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script>
        function toggleFields() {
            const choice = document.getElementById("shape").value;
            document.getElementById("rectangle-fields").classList.add("hidden");
            document.getElementById("triangle-fields").classList.add("hidden");
            document.getElementById("square-fields").classList.add("hidden");
            document.getElementById("circle-fields").classList.add("hidden");

            if (choice === "1") {
                document.getElementById("rectangle-fields").classList.remove("hidden");
            } else if (choice === "2") {
                document.getElementById("triangle-fields").classList.remove("hidden");
            } else if (choice === "3") {
                document.getElementById("square-fields").classList.remove("hidden");
            } else if (choice === "4") {
                document.getElementById("circle-fields").classList.remove("hidden");
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Area Calculator</h1>
        <form method="post">
            <fieldset>
                <legend>Select Shape</legend>
                <select id="shape" name="choice" onchange="toggleFields()" required>
                    <option value="">-- Select Shape --</option>
                    <option value="1">Rectangle</option>
                    <option value="2">Triangle</option>
                    <option value="3">Square</option>
                    <option value="4">Circle</option>
                </select>
            </fieldset>

          
            <div id="rectangle-fields" class="hidden">
                <fieldset>
                    <legend>Rectangle</legend>
                    <label for="len">Length:</label>
                    <input type="number" name="len" placeholder="Enter Length" step="any"><br>
                    <label for="Bre">Breadth:</label>
                    <input type="number" name="Bre" placeholder="Enter Breadth" step="any"><br>
                </fieldset>
            </div>

          
            <div id="triangle-fields" class="hidden">
                <fieldset>
                    <legend>Triangle</legend>
                    <label for="base">Base:</label>
                    <input type="number" name="base" placeholder="Enter Base" step="any"><br>
                    <label for="height">Height:</label>
                    <input type="number" name="height" placeholder="Enter Height" step="any"><br>
                </fieldset>
            </div>

           
            <div id="square-fields" class="hidden">
                <fieldset>
                    <legend>Square</legend>
                    <label for="side">Side:</label>
                    <input type="number" name="side" placeholder="Enter Side" step="any"><br>
                </fieldset>
            </div>

        
            <div id="circle-fields" class="hidden">
                <fieldset>
                    <legend>Circle</legend>
                    <label for="radius">Radius:</label>
                    <input type="number" name="radius" placeholder="Enter Radius" step="any"><br>
                </fieldset>
            </div>

            <input type="submit" value="Calculate Area" name="Result">
        </form>

        <?php
        if (isset($_POST['Result'])) {
            $choice = $_POST['choice'];
            $len = $_POST['len'];
            $Bre = $_POST['Bre'];
            $base = $_POST['base'] ;
            $height = $_POST['height'] ;
            $side = $_POST['side'] ;
            $radius = $_POST['radius'] ;

            
            switch ($choice) {
                case "1": 
                    $Area1 = $len * $Bre;
                    echo "<h2>Area of Rectangle: $Area1</h2>";
                    break;

                case "2": 
                    $Area2 = 0.5 * $base * $height;
                    echo "<h2>Area of Triangle: $Area2</h2>";
                    break;

                case "3": 
                    $Area3 = $side * $side;
                    echo "<h2>Area of Square: $Area3</h2>";
                    break;

                case "4": 
                    $Area4 = 3.14 * $radius * $radius;
                    echo "<h2>Area of Circle: $Area4</h2>";
                    break;

                default:
                    echo "<h2>Please select a valid shape and provide inputs.</h2>";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>
