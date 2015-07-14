<html>
<head>
        <title>TPA</title>
</head>
<body>
        <h1>View all guests</h1>

        <h3>Guest List</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Tel.</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        <?php foreach ($guest_list as $guest):?>
            <tr>
                <td>
               <?php echo $guest->gid;?>
                </td>
                <td>
               <?php echo $guest->gname;?>
                </td>
                <td>
               <?php echo $guest->gmail; ?>
                </td>
                 <td>
               <?php echo $guest->gtel; ?>
                </td>
                <td>
               <a href="<?php echo base_url() . "index.php/edit_attraction/show_detail_form/" . $guest->gid; ?>">
                <button>Edit</button></a>
<!--                    anchor to edit ctrl-->
                </td>
                <td>
                <a href="<?php echo base_url() . "index.php/delete_attraction/delete/" . $guest->gid; ?>">
                <button>Delete</button></a>
<!--                    anchor to delete ctrl -->
                </td>
                </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>