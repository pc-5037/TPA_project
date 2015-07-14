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
        <?php foreach ($attraction_list as $attraction):?>
            <tr>
                <td>
               <?php echo $attraction->aid;?>
                </td>
                <td>
               <?php echo $attraction->aname;?>
                </td>
                <td>
               <?php echo $attraction->description; ?>
                </td>
                <td>
               <?php echo anchor('edit_attraction/edit/'.$attraction->aid.'', 'edit'); ?>
<!--                    anchor to edit ctrl-->
                </td>
                <td>
                <a href="<?php echo base_url() . "index.php/delete_attraction/delete/" . $attraction->aid; ?>">
                <button>Delete</button></a>
<!--                    anchor to delete ctrl -->
                </td>
                </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>