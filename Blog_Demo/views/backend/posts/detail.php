
<?php require_once('views/backend/includes/header.php') ?>
<div class="col-md-9">
                    <div class="col-md-12 page-body">
                      <div class="row">
                        
                            
                            <div class="sub-title">
                              <h2>Detail Post</h2>
                              <a href="contact.html"><i class="icon-envelope"></i></a>
                              <p><a href="index.php?type=backend&mod=post&act=index">BACK</a></p>
                             </div>
                            
                            <div class="col-md-12 content-page">
                              
                                
                                <!-- Blog Post Start -->
                                <div class="col-md-12 blog-post">
                                     <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Thumbnail</th>
                                            <th scope="col">Content</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Tag</th>
                                            <th scope="col">View Count</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Create At</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                              <tr>
                                                  <td class="post"><?php echo "<img src='images/post/".$post['thumbnail']."' >"; ?></td?>
                                                  <td><p style="height: 300px; overflow: auto;"><?php echo $post['content']?></p></td>
                                                  <td><?php echo $post['slug']; ?></td>
                                                  <td><?php echo $post['tag']; ?></td>
                                                  <td><?php echo $post['view_count']; ?></td>
                                                  <td><?php echo $category_name['name']; ?></td>
                                                  <td><?php echo $user_name['name']; ?></td>
                                                  <td><?php echo $post['created_at']; ?></td>
                                              </tr>
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