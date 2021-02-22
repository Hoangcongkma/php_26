 <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo URL_TEMPLATE_CLIENT ?>images/bg_4.jpg');">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row no-gutters slider-text align-items-end justify-content-center">
    			<div class="col-md-9 ftco-animate pb-5 text-center">
    				<h1 class="mb-3 bread">Danh mục</h1>
    			</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-9">
    				<div class="row">
                    <?php foreach ($category as $key => $value) { ?>
    					<div class="col-md-6 col-lg-12 ftco-animate">
    						<div class="blog-entry d-lg-flex">
    							<div class="half">
    								<a href="?mod=client&c=post&act=list&id=<?php echo $value['id']?>" class="img d-flex align-items-end" style="background-image: url(<?php echo $value['thumbnail'] ?>);">
    									<div class="overlay"></div>
    								</a>
    							</div>
    							<div class="text px-md-4 px-lg-5 half pt-3">
    								<h3><a href="?mod=client&c=post&act=list&id=<?php echo $value['id']?>"><?php echo $value['name'] ?></a></h3>
    								<p><?php echo $value['description'] ?></p>
    								<p class="mb-0"><a href="?mod=client&c=post&act=list&id=<?php echo $value['id']?>" class="btn btn-primary">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
    							</div>
    						</div>
    					</div>
                    <?php } ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>