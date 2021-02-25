
<?php require_once('views/backend/includes/header.php') ?>
<div class="col-md-9">
                    <div class="col-md-12 page-body">
                      <div class="row">
                        
                            
                            <div class="sub-title">
                              <h2>Comment</h2>
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
                                            <th scope="col">#Parent ID</th>
                                            <th scope="col">Tên</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Content</th>
                                            <th scope="col">Created At</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($comments as $key => $value) { ?>
                                          
                                              <tr>
                                                  <td><?php echo $value['id']; ?></td?>
                                                  <td><?php echo $value['parent_id']; ?></td?>
                                                  <td><?php echo $value['user_name']; ?></td?>
                                                  <td><?php echo $value['email']; ?></td?>
                                                  <td><?php echo $value['content']; ?></td>
                                                  <td>
                                                      <a href="index.php?type=backend&mod=comment&act=delte&id=<?php echo $value['id']?>" class="btn btn-danger">Delete</a>
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