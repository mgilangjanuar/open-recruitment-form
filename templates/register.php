<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>Hi, <?= $user->name ?>!</h1>

        <p>Please complete this form.</p>
        <br />

        <form method="post" class="form-forizontal">
            
            <div class="form-group">
                <label>Email address<span class="text-danger">*</span></label>
                <input class="form-control" name="email" type="email" required>
            </div>
            
            <div class="form-group">
                <label>Phone number<span class="text-danger">*</span></label>
                <input class="form-control" name="phone" type="text" required>
            </div>

            <div class="form-group">
                <label>ID Line</label>
                <input class="form-control" name="line" type="text">
            </div>

            <div class="form-group">
                <label>Expectation<span class="text-danger">*</span></label>
                <textarea class="form-control" name="expectation" required></textarea>
            </div>

            <div class="form-group">
                <label>Motivation<span class="text-danger">*</span></label>
                <textarea class="form-control" name="motivation" required></textarea>
            </div>

            <div class="form-group">
                <label>Skillset</label>
                <textarea class="form-control" name="skillset"></textarea>
            </div>

            <div class="form-group">
                <label>Your idea</label>
                <textarea class="form-control" name="idea"></textarea>
            </div>

            <p class="text-right">
                <a id="cancel" href="logout" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-default">Submit</button>
            </p>
        </form>
    </div>
</div>