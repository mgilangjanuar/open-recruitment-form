<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1><?= $user['name'] ?></h1>
        <p class="pull-right">
            <a href="../update/<?= $id ?>" class="btn btn-warning">Update</a>
            <a id="delete" href="../delete/<?= $id ?>" class="btn btn-danger">Delete</a>
        </p>
        <p class="pull-left-">
            <a href="../../results" class="btn btn-default">Back</a>
        </p>
        <br /><br />

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Email</td>
                        <td><?= $user['email'] ?? isset($user['email']) ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><?= $user['phone'] ?? isset($user['phone']) ?></td>
                    </tr>
                    <tr>
                        <td>Line</td>
                        <td><?= $user['line'] ?? isset($user['line']) ?></td>
                    </tr>
                    <tr>
                        <td>Topic</td>
                        <td><?= $user['topic'] ?? isset($user['topic']) ?></td>
                    </tr>
                    <tr>
                        <td>Synopsis</td>
                        <td><?= $user['synopsis'] ?? isset($user['synopsis']) ?></td>
                    </tr>
                    <tr>
                        <td>Audience level</td>
                        <td><?= $user['audience'] ?? isset($user['audience']) ?></td>
                    </tr>
                    <tr>
                        <td>Submitted at</td>
                        <td><?= $user['created_at'] ?? isset($user['created_at']) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>