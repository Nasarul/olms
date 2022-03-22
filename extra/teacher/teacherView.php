<?php include('connect.php'); ?>
<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>View Teachers Informations</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body style="width:600px; margin:0 auto; padding:0; ">
    <p style="font-size:36px; color:#03F; text-align: center;">View Teachers Informations</p>
    <table style="width:600px" border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>          
            <th>Designation</th>
            <th>Organization</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Option</th>
        </tr>

        <?php
        $select_code = "SELECT * FROM `tblteacher`";
        $run_posts = mysqli_query($db, $select_code);
        $i = 1;
        while ($row = mysqli_fetch_array($run_posts)) {
            $id = $row['tec_id'];
            $name = $row['tec_name'];
            $designation = $row['tec_designation'];
            $organization = $row['tec_organization'];
            $email = $row['tec_email'];
            $mobile = $row['tec_mobile'];
            $sl = $i++;
        ?>
            <tr>
                <td><?php echo $sl; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $designation; ?></td>
                <td><?php echo $organization; ?></td>
                <td><?php echo $mobile; ?></td>
                <td><?php echo $email; ?></td>
                <!--<td><img src="image/<?php echo $image; ?>"style="height:100px; width:100px;"/></td>-->
                <td><a href="teacherEdit.php?id=<?php echo $id; ?>" style="text-decoration:none; border:1px solid #00F;">Update</a>&nbsp;&nbsp;<a href="teacherDelete.php?id=<?php echo $id; ?>" style="text-decoration:none; border:1px solid #0F0;">Delete</a></td>
            </tr>
            
        <?php } ?>
        
    </table>

</body>

</html>