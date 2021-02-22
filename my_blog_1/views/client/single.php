  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $post["thumbnail"] ?>');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-5 bread"><?php echo $post['title'] ?></h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-lg-last ftco-animate">
            <p>Lượt xem: <?php echo $post['view_count'] ?></p>
            <?php echo $post["content"] ?>
            <div class="pt-5 mt-5">
              <h3 class="mb-5">Comments</h3>
              <ul class="comment-list">
                <?php foreach ($comment as $key => $value) { $created_at=  date ("jS M Y", strtotime($value['created_at'])); ?>
                  <li class="comment">
                  <!-- <div class="vcard bio">
                    <img src="images/person_1.jpg">
                  </div> -->
                  <?php if ($value['post_id']==$post['id']) { ?>
                    <div class="comment-body">
                      <h3><?php echo $value['name'] ?></h3>
                      <div class="meta"><?php echo $created_at ?></div>
                      <p><?php echo $value['content'] ?></p>
                    </div>
                  <?php } else {
                      echo "Chưa có bình luận";
                    } ?>

                </li>
              <?php } ?>
            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Viết bình luận tại đây!</h3>
              <form action="?mod=client&act=createComment&c=comment" method="POST" class="p-5 bg-light">
                <input type="hidden" name="post_id" value="<?php echo $post['id']?>">
                <div class="form-group" action="" method="POST">
                  <label for="name">Tên</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                  <label for="message">Bình luận</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control" name="content"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar pr-lg-5 ftco-animate">

          <div class="sidebar-box ftco-animate">
            <h3 class="heading mb-4">Bài viết mới</h3>
            <?php foreach ($new as $key => $value) { $created_at =  date ("jS M Y", strtotime($value['created_at'])); ?>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(<?php echo $value['thumbnail'] ?>);"></a>
              <div class="text">
                <h3><a href="?mod=client&act=detail&c=post&id=<?php echo $value['id'];?>"><?php echo $value['title'] ?></a></h3>
                <div class="meta">
                  <div><a href="?mod=client&act=detail&c=post&id=<?php echo $value['id'];?>"><span class="icon-calendar"></span> <?php echo $created_at; ?></a></div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
    </section> <!-- .section -->