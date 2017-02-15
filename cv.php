<?php
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <title>CV</title>
    <link href="css/my_style.css" rel="stylesheet">
</head>
<body>
<h1>CV</h1>
<div>
    <table>
        <th colspan="2">Personal Information</th>
        <tr>
            <td>First Name</td>
            <td>
                <?php if (isset($_POST['firstname']))
                    echo $_POST['firstname'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>
                <?php if (isset($_POST['lastname']))
                    echo $_POST['lastname'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <?php if (isset($_POST['email']))
                    echo $_POST['email'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>
                <?php if (isset($_POST['phone']))
                    echo $_POST['phone'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <?php if (isset($_POST['gender']))
                    echo $_POST['gender'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td>
                <?php if (isset($_POST['birth']))
                    echo $_POST['birth'];
                ?>
            </td>
        </tr>
        <tr>
            <td>Nationality</td>
            <td>
                <?php if (isset($_POST['nationality']))
                    echo $_POST['nationality'];
                ?>
            </td>
        </tr>
    </table>
</div>

<div>
    <table>
        <th colspan="2">Last Work Position</th>
        <tr>
            <td>Company Name</td>
            <td>
                <?php if (isset($_POST['company']))
                    echo $_POST['company'];
                ?>
            </td>
        </tr>
        <tr>
            <td>From</td>
            <td>
                <?php if (isset($_POST['from']))
                    echo $_POST['from'];
                ?>
            </td>
        </tr>
        <tr>
            <td>To</td>
            <td>
                <?php if (isset($_POST['to']))
                    echo $_POST['to'];
                ?>
            </td>
        </tr>
    </table>
</div>
<div>
    <table>
        <th colspan="3">Computer Skills</th>
        <tr>
            <th rowspan="10">Programming Languages</th>
            <th>Language</th>
            <th>Skill Level</th>
        </tr>
        <?php if (isset($_POST['programlang'])) {
            for ($i = 0; $i < (count($_POST['programlang'])); $i++) {
                echo "<tr><td>" . $_POST['programlang'][$i] . "</td><td>" . $_POST['level'][$i] . "</td></tr>";
            };
        } ?>
    </table>
</div>
<div>
    <table>
        <th colspan="5">Other Skills</th>
        <tr>
            <?php
            $n = 1;
            if (isset($_POST['languages']))
                $n += count($_POST['languages']);
            echo "<th rowspan='$n'>Languages</th>";
            ?>
            <th>Language</th>
            <th>Comprehension</th>
            <th>Reading</th>
            <th>Writing</th>
        </tr>
        <?php if (isset($_POST['languages'])) {
            for ($i = 0; $i < count($_POST['languages']); $i++) {
                $compreh = "No selected";
                $read = "No selected";
                $write = "No selected";
                if (isset($_POST['comprehension'][$i])) $compreh = $_POST['comprehension'][$i];
                if (isset($_POST['reading'][$i])) $read = $_POST['reading'][$i];
                if (isset($_POST['writing'][$i])) $write = $_POST['writing'][$i];
                echo "<tr><td>" . $_POST['languages'][$i] . "</td><td>" . $compreh . "</td><td>" . $read . "</td><td>" . $write . "</td></tr>";
            };
        }; ?>
        <tr>
            <td>Driver's License</td>
            <td colspan="4">
                <?php if (isset($_POST['B'])) echo $_POST['B'] . "; ";
                if (isset($_POST['A'])) echo $_POST['A'] . "; ";
                if (isset($_POST['C'])) echo $_POST['C'] . "; ";
                ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>