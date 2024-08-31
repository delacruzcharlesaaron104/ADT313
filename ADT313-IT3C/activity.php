<?php
$table = array(
    "header"=>array(
        "Student ID",
        "Lastname",
        "Middlename",
        "Firstname",
        "Course",
        "Stection"
    ),
    "body"=>array(
        array(
            "Lastname"=>"Lastname",
            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Course"=>"IT",
            "Section"=>"3C"
        ),
        array(
            "Lastname"=>"Lastname",
            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Course"=>"IT",
            "Section"=>"3C"
        ),
        array(
            "Lastname"=>"Lastname",
            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Course"=>"IT",
            "Section"=>"3C"
        ),
        array(
            "Lastname"=>"Lastname",
            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Course"=>"IT",
            "Section"=>"3C"
        ),
        array(
            "Lastname"=>"Lastname",
            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Course"=>"IT",
            "Section"=>"3C"
        ),
        array(
            "Lastname"=>"Lastname",
            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Course"=>"IT",
            "Section"=>"3C"
        ),
        array(
            "Lastname"=>"Lastname",
            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Course"=>"IT",
            "Section"=>"3C"
        ),
        array(
            "Lastname"=>"Lastname",
            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Course"=>"IT",
            "Section"=>"3C"
        ),
        array(
            "Lastname"=>"Lastname",
            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Course"=>"IT",
            "Section"=>"3C"
        ),
        array(
            "Lastname"=>"Lastname",
            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Course"=>"IT",
            "Section"=>"3C"
        ),
        array(
            "Lastname"=>"Lastname",
            "Firstname"=>"Firstname",
            "Middlename"=>"Middlename",
            "Course"=>"IT",
            "Section"=>"3C"
        )
    )
)

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Table</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <?php
                foreach ($table['header'] as $header) {
                    echo "<th>{$header}</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $student_id = 0;
            foreach ($table['body'] as $row) {
                echo "<tr>";
                echo "<td>" . $student_id++ . "</td>"; // increment student ID
                echo "<td>" . $row['Lastname'] . "</td>";
                echo "<td>" . $row['Middlename'] . "</td>";
                echo "<td>" . $row['Firstname'] . "</td>";
                echo "<td>" . $row['Course'] . "</td>";
                echo "<td>" . $row['Section'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
