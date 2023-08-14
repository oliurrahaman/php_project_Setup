<?php include "header.php"?>
<section class="py-5 bg-danger-subtle">
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($students as $student) {?>
                        <tr>
                            <td><?php echo $student['name'];?></td>
                            <td><?php echo $student['email'];?></td>
                            <td><?php echo $student['mobile'];?></td>

                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"?>

