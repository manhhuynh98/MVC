
<table class="table table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>url</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $s = json_decode($data["SV"]);
        foreach ($s as $key) { ?>
            <tr>
                <td><?php echo  $key->id; ?></td>
                <td><?php echo  $key->name; ?></td>
                <td><?php echo  $key->img; ?></td>
            </tr>
            <?php
        }
    ?>
    </tbody>
</table>