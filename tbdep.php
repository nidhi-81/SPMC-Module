<?php
  include('departmentwise.php');
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
                <th>Departments</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach ($departments as $department): ?>
    <tr>
        <td data-label="Departments">
            <a href="tbfac.php?department=<?php echo urlencode($department['department']); ?>">
                <?php echo htmlspecialchars($department['department'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
        </td>
    </tr>
<?php endforeach; ?>


        </tbody>
    </table>

</body>

</html>

<style>
    body {
        margin: 0;
        padding: 20px;
        font-family: sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table td,
    .table th {
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: center;
        font-size: 16px;
    }

    .table th {
        background-color: darkblue;
        color: #ffffff;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f5f5f5;
    }

    @media(max-width: 500px) {
        .table thead {
            display: none;
        }

        .table,
        .table tbody,
        .table tr,
        .table td {
            display: block;
            width: 100%;
        }

        .table tr {
            margin-bottom: 15px;
        }

        .table td {
            text-align: right;
            padding-left: 50%;
            text-align: right;
            position: relative;
        }

        .table td .table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-size: 15px;
            font-weight: bold;
            text-align: left;
        }
    }
</style>
