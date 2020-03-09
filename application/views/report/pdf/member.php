<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
    <center>
        <h1>
            Member List
        </h1>
    </center>
    <br><br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name Member</th>
            <th>User Name</th>
            <th>Address</th>
            <th>Email</th>
        </tr>
        <?php

        $no = 1;
        foreach ($members as $bk) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $bk->nama_anggota ?></td>
                <td><?php echo $bk->username ?></td>
                <td><?php echo $bk->alamat ?></td>
                <td><?php echo $bk->email ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>