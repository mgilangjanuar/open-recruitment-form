<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>Update: <?= $user['name'] ?>!</h1>
        <br />

        <form method="post" class="form-forizontal">
            
            <div class="form-group">
                <label>Name<span class="text-danger">*</span></label>
                <input class="form-control" name="name" type="text" value="<?= $user['name'] ?? isset($user['name']) ?>" required>
            </div>

            <div class="form-group">
                <label>Username<span class="text-danger">*</span></label>
                <input class="form-control" name="username" type="text" value="<?= $user['username'] ?? isset($user['username']) ?>" required>
            </div>

            <div class="form-group">
                <label>Faculty<span class="text-danger">*</span></label>
                <input class="form-control" name="faculty" type="text" value="<?= $user['faculty'] ?? isset($user['faculty']) ?>" required>
            </div>

            <div class="form-group">
                <label>Study Program<span class="text-danger">*</span></label>
                <input class="form-control" name="study_program" type="text" value="<?= $user['study_program'] ?? isset($user['study_program']) ?>" required>
            </div>

            <div class="form-group">
                <label>Educational Program<span class="text-danger">*</span></label>
                <input class="form-control" name="educational_program" type="text" value="<?= $user['educational_program'] ?? isset($user['educational_program']) ?>" required>
            </div>

            <div class="form-group">
                <label>Email address<span class="text-danger">*</span></label>
                <input class="form-control" name="email" type="email" value="<?= $user['email'] ?? isset($user['email']) ?>" required>
            </div>
            
            <div class="form-group">
                <label>Phone number<span class="text-danger">*</span></label>
                <input class="form-control" name="phone" type="text" value="<?= $user['phone'] ?? isset($user['phone']) ?>" required>
            </div>

            <div class="form-group">
                <label>ID Line</label>
                <input class="form-control" name="line" value="<?= $user['line'] ?? isset($user['line']) ?>" type="text">
            </div>

            <div class="form-group">
                <label>Expectation<span class="text-danger">*</span></label>
                <textarea class="form-control" name="expectation" required><?= $user['expectation'] ?? isset($user['expectation']) ?></textarea>
            </div>

            <div class="form-group">
                <label>Motivation<span class="text-danger">*</span></label>
                <textarea class="form-control" name="motivation" required><?= $user['motivation'] ?? isset($user['email']) ?></textarea>
            </div>

            <div class="form-group">
                <label>Skillset</label>
                <textarea class="form-control" name="skillset"><?= $user['skillset'] ?? isset($user['skillset']) ?></textarea>
            </div>

            <div class="form-group">
                <label>Your idea</label>
                <textarea class="form-control" name="idea"><?= $user['idea'] ?? isset($user['idea']) ?></textarea>
            </div>

            <p class="text-right">
                <a id="cancel" href="../view/<?= $id ?>" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-default">Submit</button>
            </p>
        </form>
    </div>
</div>