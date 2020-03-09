<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
    <center>
        <h1>
            Request List
        </h1>
    </center>
    <br><br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Book title</th>
            <th>Author</th>
        </tr>
        <?php

        $no = 1;
        foreach ($requests as $request) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $request->judul_buku ?></td>
                <td><?php echo $request->pengarang ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>