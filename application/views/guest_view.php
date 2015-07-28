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
                <th>UID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Tel.</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        <?php foreach ($guest_list as $guest):?>
            <tr>
                <td>
               <?php echo $guest->gid;?>
                </td>
                <td>
               <?php echo $guest->guid;?>
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
               <?php echo $guest->status ? 'true' : 'false'; ?>
                </td>
                <td>
               <a href="<?php echo base_url() . "index.php/edit_guest/show_detail_form/" . $guest->gid; ?>">
                <button>Edit</button></a>
<!--                    anchor to edit ctrl-->
                </td>
                <td>
                <a href="<?php echo base_url() . "index.php/delete_guest/delete/" . $guest->gid; ?>">
                <button>Delete</button></a>
<!--                    anchor to delete ctrl -->
                </td>
                </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>