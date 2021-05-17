<html>
    <head>
        <style>
            table,th,td{
            border: 1px solid black;
            }
            table {
            border-spacing: 2px;
            }
        </style>
    </head>
    <body>
        <table >
            <caption><h3>Books on Loan</h3></caption>
            <tr>
                <th>Name</th>
                <th>Borrowed</th>
                <th>Returned</th>
                <th>Out</th>
            </tr>
            <tr>
                <th>Al</th>
                <td><?php echo $_GET['borrowed']['al']; ?></td>
                <td><?php echo $_GET['returned']['al']; ?></td>
                <td><?php echo $_GET['borrowed']['al'] - $_GET['returned']['al']; ?></td>
            </tr>
            <tr>
                <th>Mary</th>
                <td><?php echo $_GET['borrowed']['mary']; ?></td>
                <td><?php echo $_GET['returned']['mary']; ?></td>
                <td><?php echo $_GET['borrowed']['mary'] - $_GET['returned']['mary']; ?></td>
            </tr>
            <tr>
                <th>Ed</th>
                <td><?php echo $_GET['borrowed']['ed']; ?></td>
                <td><?php echo $_GET['returned']['ed']; ?></td>
                <td><?php echo $_GET['borrowed']['ed'] - $_GET['returned']['ed'] ; ?></td>
            </tr>
        </table>
    </body>
</html>