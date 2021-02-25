
<?php require_once('views/backend/includes/header.php') ?>
<div class="col-md-9">
                    <div class="col-md-12 page-body">
                      <div class="row">
                        
                            
                            <div class="sub-title">
                              <h2>Detail Categories</h2>
                              <a href="contact.html"><i class="icon-envelope"></i></a>
                              <p><a href="index.php?type=backend&mod=category&act=index">BACK</a></p>
                             </div>
                            
                            <div class="col-md-12 content-page">
                              
                                
                                <!-- Blog Post Start -->
                                <div class="col-md-12 blog-post">
                                     <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Parent ID</th>
                                            <th scope="col">Thumbnail</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Create At</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                              <tr>
                                                  <td><?php echo $categories['id']; ?></td?>
                                                  <td><?php echo $categories['name']; ?></td?>
                                                  <td><?php echo $categories['parent_id']; ?></td?>
                                                  <td class="cate"><?php echo "<img src='images/category/".$categories['thumbnail']."' >"; ?></td?>
                                                  <td><?php echo $categories['slug']; ?></td?>
                                                  <td><?php echo $categories['description']; ?></td>
                                                  <td><?php echo $categories['created_at']; ?></td>
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