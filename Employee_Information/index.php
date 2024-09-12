<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/employee.png">
    <title>Employee List</title>
    <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="library/fontawesome/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/fontawesome/css/all.min.css">
    <script src="path/to/fontawesome/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bungee+Spice&family=Dela+Gothic+One&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rubik+Doodle+Shadow&family=Salsa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

</head>

<body>
<div id="successModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Data saved successfully!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('#successModal').modal('show');
        });
    </script>
<?php endif; ?>

<div class="container">
    <!-- Your existing HTML content here -->
    <table>
        <tr>        
            <td>
                <form method="post" action="save_data.php">
                    <table id="my_table">
                        <tr>
                            <th colspan="7">社員情報</th>
                        </tr>
                        <tr>
        <td>社員ID</td>
        <td>社員名</td>
        <td>メール</td>
        <td>性</td> <!-- New gender column -->
        <td>電話番号</td>
        <td>住所</td>
        <td>給料（円）</td>
    </tr>   
    
    <?php
    // Fetch employee data from the database
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=employee_db;charset=utf8", 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->query("SELECT employee_id, name, email, gender, phone, address, salary FROM employees");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td><input type='text' name='employee_id[]' value='" . htmlspecialchars($row['employee_id']) . "'></td>";
            echo "<td><input type='text' name='name[]' value='" . htmlspecialchars($row['name']) . "'></td>";
            echo "<td><input type='email' name='email[]' value='" . htmlspecialchars($row['email']) . "'></td>";
            echo "<td><select name='gender[]'>
                      <option value='Male'" . ($row['gender'] == 'Male' ? 'selected' : '') . ">Male</option>
                      <option value='Female'" . ($row['gender'] == 'Female' ? 'selected' : '') . ">Female</option>
                  </select></td>";
            echo "<td><input type='text' name='phone[]' value='" . htmlspecialchars($row['phone']) . "'></td>";
            echo "<td><input type='text' name='address[]' value='" . htmlspecialchars($row['address']) . "'></td>";
            echo "<td><input type='text' name='salary[]' value='" . htmlspecialchars($row['salary']) . "'></td>";
            echo "</tr>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>

                    </table>

                    <div class="container1">
                        <table>
                            <tr>
                                <td><button type="button" onclick="addRow()">新しい行を追加する</button></td>
                                <td><input type="submit" value="提出する"></td>
                            </tr>
                        </table>
                    </div>                    
                </form>
            </td>
            <td style="position: fixed;"><img src="images/salaryman.png" width="250px" height="300px"></td>
        </tr>
    </table>
</div>

<script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
<script src="library/bootstrap/popper.min.js"></script>
<script src="library/bootstrap/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>
