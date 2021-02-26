
<?php require_once('views/backend/includes/header.php') ?>
<div class="col-md-9">
                    <div class="col-md-12 page-body">
                      <div class="row">
                         <div class="container" style="width: 100%">
                            <h3 align="center">Update User</h3>
                            <hr>
                                <form action="index.php?type=backend&mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $user['name']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="email" value="<?php echo $user['email']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="password" value="<?php echo $user['password']?>">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Avatar</label>
                                            <div class="user">
                                                <?php echo "<img src='images/user/".$user['avatar']."' >"; ?>
                                                <input type="hidden" name="avatar1" value="<?php echo $user['avatar']?>">        
                                            </div>
                                            <input type="file" class="form-control" id="" placeholder="" name="avatar">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Created At</label>
                                            <input type="text" class="form-control" id="" placeholder="" name="created_at"  value="<?php echo $user['created_at']?>">
                                        </div>
                                    <button style="margin-bottom: 30px" type="submit" name="upload" class="btn btn-primary">Create</button>
                                </form>
                            </div>    
                        </div>
                    </div>         
</div>
<?php require_once('views/backend/includes/footer.php') ?>                        