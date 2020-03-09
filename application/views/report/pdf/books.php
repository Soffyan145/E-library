<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
<center>
    <h1>
        Book List
    </h1>
</center>
    <br><br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul buku</th>
            <th>Pengarang</th>
            <th>Tgl Rilis</th>
            <th>Kategori</th>
        </tr>
        <?php

        $no = 1;
        foreach ($books as $bk) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $bk->judul_buku ?></td>
                <td><?php echo $bk->nama_pengarang ?></td>
                <td><?php echo $bk->rilis ?></td>
                <td><?php echo $bk->kategori ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>