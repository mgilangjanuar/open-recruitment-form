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
                <label>Benefit</label>
                <textarea class="form-control" name="benefit"><?= $user['benefit'] ?? isset($user['benefit']) ?></textarea>
            </div>

            <div class="form-group">
                <label>Theme or topic<span class="text-danger">*</span></label>
                <textarea class="form-control" name="topic" required><?= $user['topic'] ?? isset($user['topic']) ?></textarea>
            </div>

            <div class="form-group">
                <label>Audience level<span class="text-danger">*</span></label>
                <div class="radio">
                    <label><input type="radio" name="audience" value="beginner" <?= $user['audience'] == 'beginner' ? 'checked' : '' ?>>Beginner</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="audience" value="intermediate" <?= $user['audience'] == 'intermediate' ? 'checked' : '' ?>>Intermediate</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="audience" value="pro" <?= $user['audience'] == 'pro' ? 'checked' : '' ?>>Pro</label>
                </div>
            </div>

            <p class="text-right">
                <a id="cancel" href="../view/<?= $id ?>" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-default">Submit</button>
            </p>
        </form>
    </div>
</div>