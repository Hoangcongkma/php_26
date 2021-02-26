<?php require_once('views/backend/includes/header.php') ?>
<div class="col-md-9">
                    <div class="col-md-12 page-body">
                      <div class="row">
                        
                            
                            <div class="sub-title">
                              <h2>Post</h2>
                                <a href="contact.html"><i class="icon-envelope"></i></a>
                                <p><a href="index.php?type=backend&mod=post&act=create">Add New Post</a></p>
                                <?php if (isset($_COOKIE['add_new'])) { ?>
                                  <div class="alert alert-success" role="alert">
                                    <?php echo $_COOKIE['add_new'] ?>
                                  </div>
                              <?php } ?>
                              <?php if (isset($_COOKIE['update'])) { ?>
                                  <div class="alert alert-info" role="alert">
                                    <?php echo $_COOKIE['update'] ?>
                                  </div>
                              <?php } ?>
                              <?php if (isset($_COOKIE['delete'])) { ?>
                                  <div class="alert alert-danger" role="alert">
                                    <?php echo $_COOKIE['delete'] ?>
                                  </div>
                              <?php } ?>
                             </div>
                            
                            
                            <div class="col-md-12 content-page">
                              
                                
                                <!-- Blog Post Start -->
                                <div class="col-md-12 blog-post">
                                     <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">#ID</th>
                                            <th scope="col">Tên</th>
                                            <th scope="col">Mô tả</th>
                                            <th scope="col"> Hành Động</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($posts as $key => $value) { ?>
                                              <tr>
                                                  <td><?php echo $value['id']; ?></td?>
                                                  <td><?php echo $value['title']; ?></td?>
                                                  <td><?php echo $value['description']; ?></td>
                                                  <td>
                                                      <a href="index.php?type=backend&mod=post&act=detail&id=<?php echo $value['id']?>&category_id=<?php echo $value['category_id']?>&user_id=<?php echo $value['user_id']?>" class="btn btn-primary">Detail</a>
                                                      <a href="index.php?type=backend&mod=post&act=edit&id=<?php echo $value['id']?>" class="btn btn-success">Edit</a>
                                                      <a href="index.php?type=backend&mod=post&act=delte&id=<?php echo $value['id']?>" class="btn btn-danger">Delete</a>
                                                  </td>
                                              </tr>
                                          <?php } ?>
                                        </tbody>
                                </table>
                            
                                </div>
                                <!-- Blog Post End -->
                            
                                <div class="col-md-12 text-center">
                                 <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
                                 <div id="post-end-message"></div>
                                </div>
                                
                             </div>
                              
                         </div>
<?php require_once('views/backend/includes/footer.php') ?>                        