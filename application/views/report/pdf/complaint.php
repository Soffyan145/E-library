<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
    <center>
        <h1>
            Complaint List
        </h1>
    </center>
    <br><br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Keluhan</th>
        </tr>
        <?php

        $no = 1;
        foreach ($complaints as $coplaint) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $coplaint->nama ?></td>
                <td><?php echo $coplaint->email ?></td>
                <td><?php echo $coplaint->keluhan ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>