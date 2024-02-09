<?php

$con = mysqli_connect("localhost", "root", "", "webtech");
$q = "SELECT * FROM test";
$fire = mysqli_query($con, $q);
while ($data = mysqli_fetch_array($fire)) {
    ?>
    <tr>
        <th scope="row">
            <?php echo $data['ID']; ?>
        </th>
        <td>
            <?php echo $data['Name']; ?>
        </td>
        <td>
            <?php echo $data['Class']; ?>
        </td>
        <td>
            <?php echo $data['Roll']; ?>
        </td>
        <td><button class="btn btn-warning" data-mdb-ripple-init id="dataEdit" onclick="data_edit(<?php echo $data['ID']; ?>)">Edit</button>
            <button class="btn btn-danger" data-mdb-ripple-init id="dataDelete"><a
                    href="delete.php?ID=<?php echo $data['ID']; ?>">Delete</a></button>
        </td>
    </tr>
    <?php

}


?>