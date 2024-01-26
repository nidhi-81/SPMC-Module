<?php
// Include your database connection file
include('database.php');
include('fetch_data.php');

$department = isset($_GET['department']) ? $_GET['department'] : '';
include("departmentwise.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_code'])) {
    $delete_code = $_POST['delete_code'];

    // Assuming 'new_faculty_resume' is the table name
    $table_name_resume = 'new_faculty_resume';

    // Use prepared statement to prevent SQL injection
    $query_delete = $conn->prepare("DELETE FROM $table_name_resume WHERE code = ?");
    $query_delete->bind_param('s', $delete_code);

    // Execute the delete query
    if ($query_delete->execute()) {
        // Redirect back to the page after deletion
       
            header("Location: tbfac.php?department=" . $department);
            exit();
        
        
    } else {
        // Handle deletion error
        echo "Error deleting record: " . $conn->error;
    }

    // Close the delete query
    $query_delete->close();
}

// Assuming $conn is your database connection variable

// Initialize variables
$objs = [];

// Assuming 'new_faculty_resume' is the table name
$table_name_resume = 'new_faculty_resume';

// Use prepared statement to prevent SQL injection
$query_objs = $conn->prepare("SELECT * FROM $table_name_resume WHERE department = ?");
$query_objs->bind_param('s', $department);
$query_objs->execute();
$result_objs = $query_objs->get_result();

// Check if there are objects in the result
if ($result_objs->num_rows > 0) {
    while ($row = $result_objs->fetch_assoc()) {
        $objs[] = $row;
    }
}

// Close the database connections
$query_objs->close();
// Check if the form is submitted

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Responsive Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Department</th>
                <th>Email</th>
                <th>Image</th>
                <th>Resume</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($objs as $obj): ?>
                <tr>
                    <td><?php echo htmlspecialchars($obj['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($obj['designation'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($obj['department'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($obj['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <?php if ($obj['image']): ?>
                        <td><img src='<?php echo htmlspecialchars($obj['image'], ENT_QUOTES, 'UTF-8'); ?>' alt='<?php echo htmlspecialchars($obj['name'], ENT_QUOTES, 'UTF-8'); ?>' style="width: 100px; height: 80px;"></td>
                    <?php else: ?>
                        <td>No image available</td>
                    <?php endif; ?>
                    <?php if ($obj['resume']): ?>
                        <td><button class='a' onclick="window.location.href='<?php echo htmlspecialchars($obj['resume'], ENT_QUOTES, 'UTF-8'); ?>'" target="_blank">Open resume</button></td>
                    <?php else: ?>
                        <td>No resume available</td>
                    <?php endif; ?>
                    <?php $Uname = $obj['name']; ?>
                    <td data-label="+">
                        <a href="add_faculty_form3.php?username=<?php echo $obj['username']; ?>"><input type=button class="b" value="Edit"></a>
                    </td>
                    
<td data-label="✘">
    <form action="tbfac.php?department=<?php echo $department; ?>" method="post" onsubmit="return confirm('Are you sure you want to delete this faculty?');">
        <input type="hidden" name="delete_code" value="<?php echo $obj['code']; ?>">
        <input type="submit" class="c" value="Delete">
    </form>
</td>


                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="container">
        <div class="center">
            <a href="add_new_faculty_page.php">
                <button class='add'><a  class='color' href="add_faculty_form.php"><h3>Add new faculty</h3></a></button>
            </a>
        </div>
    </div>
</body>

</html>

<style>
    body{
	margin:0;
	padding:20px;
	font-family: sans-serif;
}

*{
	box-sizing: border-box;
}
.color{
   
	text-decoration:none;
	cursor:pointer;
	background-color: #03254c;
    transition:box-shadow 0.3s ease;
    border-color:white;
    color:white;
}
.table{
	width: 100%;
	border-collapse: collapse;
}
@keyframes clickEffect{
	0%{
		transform:scale(1);
	}
	50%{
		transform:scale(0.9);
	}
	100%{
		transform:scale(1);
	}
}
.b{
	font-weight:bold;
	padding: 10px 20px;
	border : 2px solid ;
	border-radius: 45px;
	cursor:pointer;
    color: #2a9df4;
	background-color:white;

  border-color:#2a9df4;

}
.b:active{
	animation:clickEffect 0.3s ease;
	
}
.a:active{
	animation:clickEffect 0.3s ease;
	
}
.a{
	font-weight:bold;

	padding: 10px 20px;
	border : 2px solid ;
	border-radius: 45px;
	cursor:pointer;
  background-color:white;
  color:#2a9df4;
  border-color:#2a9df4;

}
.c:active{
	animation:clickEffect 0.3s ease;
	
}
.c{
	font-weight:bold;

	padding: 10px 20px;
	border : 2px solid ;
	border-radius: 45px;
	cursor:pointer;
	background-color:white;

  color: #d9534f;
  

}
.add{
	padding: 10px 20px;
	border : 2px solid ;
	border-radius: 45px;
	cursor:pointer;
	background-color: #03254c;
transition:box-shadow 0.3s ease;
border-color:white;
  color:white;

}
@keyframes clickEffect{
	0%{
		transform:scale(1);
	}
	50%{
		transform:scale(0.9);
	}
	100%{
		transform:scale(1);
	}
}
.add:active{
	animation:clickEffect 0.3s ease;
	
}

.table td,.table th{
  padding:12px 15px;
  border:1px solid #ddd;
  text-align: center;
  font-size:16px;
}

.table th{
	background-color:#03254c;

	color:white;
}

.table tbody tr:nth-child(even){
	background-color: #f5f5f5;
}

/*responsive*/

@media(max-width: 500px){
	.table thead{
		display: none;
	}

	.table, .table tbody, .table tr, .table td{
		display: block;
		width: 100%;
	}
	.table tr{
		margin-bottom:15px;
	}
	.table td{
		text-align: right;
		padding-left: 50%;
		text-align: right;
		position: relative;
	}
	.table td::before{
		content: attr(data-label);
		position: absolute;
		left:0;
		width: 50%;
		padding-left:15px;
		font-size:15px;
		font-weight: bold;
		text-align: left;
	}
}


.container {
  height: 200px;
  position: relative;
  border: 5px  rgb(0, 2, 0);
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}



</style>