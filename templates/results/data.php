<div class="row">
    <div class="col-lg-9 col-lg-offset-1 col-md-12">
        <h1>Participants</h1>
        <p>
            <a href="results/logout" class="btn btn-danger">Logout</a>
        </p>
        <br />
        <div class="table-responsive">
            <?php if(!$data): ?>
                <p>Empty</p>
            <?php else: ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th><strong>Date</strong></th>
                            <th><strong>Name</strong></th>
                            <th><strong>NPM</strong></th>
                            <th><strong>Study Program</strong></th>
                            <th><strong>Actions</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $key => $value): ?>
                            <tr>
                                <td><?= $value['created_at'] ?></td>
                                <td><?= $value['name'] ?></td>                        
                                <td><?= $key ?></td>
                                <td><?= $value['study_program'] ?></td>
                                <td>
                                    <a class="btn btn-xs btn-default" href="results/view/<?= $key ?>">View</a>
                                    <a class="btn btn-xs btn-warning" href="results/update/<?= $key ?>">Update</a>
                                    <a id="delete" class="btn btn-xs btn-danger" href="results/delete/<?= $key ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php endif ?>
        </div>
    </div>
</div>