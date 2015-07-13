<html>
<head>
        <title>TPA</title>
</head>
<body>
        <h1>View all attractions</h1>

        <h3>Attraction List</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        <?php foreach ($attraction_list as $row):?>
            <tr>
                <td>
               <?php echo $row->aid;?>
                </td>
                <td>
               <?php echo $row->aname;?>
                </td>
                <td>
               <?php echo $row->description; ?>
                </td>
                <td>
               <button onclick="location.href='<?php echo base_url();?>register/index'">edit</button>
<!--                    anchor to edit ctrl-->
                </td>
                <td>
               <button onclick="location.href='<?php echo base_url();?>register/index'">delete</button>
<!--                    anchor to delete ctrl -->
                </td>
                </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>