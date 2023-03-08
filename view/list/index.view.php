<?php require_once ViewDir."/template/header.php"?>


<h1>My Doubt list</h1>
<?php
//
//dd($lists);
//?>
<div class="d-flex justify-content-center">
    <a href="<?=route("list-create")?>" class="btn btn-outline-primary">Create New</a>
</div>

<table class="table table-bordered my-5">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Money</th>
        <th>Action</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($lists as $list): ?>
        <tr>
            <td><?=$list["id"] ?></td>
            <td><?=$list["name"] ?></td>
            <td><?=$list["money"] ?></td>
            <td>
                <a href="<?= route("list-update",["id"=>$list['id']]);?>" class="btn btn-sm btn-outline-info">Edit</a>
                <a href="<?= route("list-delete",["id"=>$list['id']]);?>" class="btn btn-sm btn-outline-danger">Delete</a>
            </td>
            <td><?=$list["created_at"] ?></td>
        </tr>

        <?php endforeach; ?>

    </tbody>
</table>

<?php require_once ViewDir."/template/footer.php"?>
