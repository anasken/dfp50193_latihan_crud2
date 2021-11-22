<?php	
    $idmakanan = $_GET['idmakanan'];
    $sql = "SELECT * FROM makanan_sampingan WHERE idmakanan = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $idmakanan);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array();
    ?>
    <form action="kemaskini_simpan.php" method="post">
        <input type="hidden" name="idmakanan" value="<?php echo $row->idmakanan; ?>"/>
        <table>
            <tr>
                <td><label for="nama">Nama Makanan</label></td>
                <td>
                    <input id="nama" type="text" name="nama"
                           value="<?php echo $row->nama; ?>" required/>
                </td>
            </tr>
            <tr>
                <td><label for="bilangan">Bilangan</label></td>
                <td>
                    <input id="bilangan" type="number" step="any" name="bilangan"
                           value="<?php echo $row->bilangan; ?>" required/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>