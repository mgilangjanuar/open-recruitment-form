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
                        <td>NPM</td>
                        <td><?= $id ?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><?= $user['username'] ?? isset($user['username']) ?></td>
                    </tr>
                    <tr>
                        <td>Faculty</td>
                        <td><?= $user['faculty'] ?? isset($user['faculty']) ?></td>
                    </tr>
                    <tr>
                        <td>Study Program</td>
                        <td><?= $user['study_program'] ?? isset($user['study_program']) ?></td>
                    </tr>
                    <tr>
                        <td>Educational Program</td>
                        <td><?= $user['educational_program'] ?? isset($user['educational_program']) ?></td>
                    </tr>
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
                        <td>Expectation</td>
                        <td><?= $user['expectation'] ?? isset($user['expectation']) ?></td>
                    </tr>
                    <tr>
                        <td>Motivation</td>
                        <td><?= $user['motivation'] ?? isset($user['motivation']) ?></td>
                    </tr>
                    <tr>
                        <td>Skillset</td>
                        <td><?= $user['skillset'] ?? isset($user['skillset']) ?></td>
                    </tr>
                    <tr>
                        <td>Idea</td>
                        <td><?= $user['idea'] ?? isset($user['idea']) ?></td>
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