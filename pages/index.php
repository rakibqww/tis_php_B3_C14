
<?php include 'header.php'?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header"><h3>My String Word Counter</h3></div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">You String</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="string" value="<?php echo isset($result['string']) ? $result['string'] : ' '; ?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" >Total Word</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($result['word']) ? $result['word'] : ' '; ?>" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Total Character</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($result['character']) ? $result['character'] : ''; ?>" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>