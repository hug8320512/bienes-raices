<?php  /* WE SHOUD HAVE ACCESS TO $post VAR */ ?>

<div class="card border-0 pb-6 mb-6 border-bottom">
    <div class="position-relative d-flex align-items-end card-img-top">
    <a href="<?php echo $post['url'];?>" class="hover-shine d-block">
        <img src="<?php echo $post['image'];?>" alt="">
    </a>
    </div>
    <div class="card-body p-0">
    <ul class="list-inline mt-4">
        <li class="list-inline-item mr-4"><i class="far fa-user mr-1"></i> <?php echo $post["author"];?></li>
        <li class="list-inline-item mr-4"><i class="far fa-calendar mr-1"></i> <?php echo $post['created'];?></li>
    </ul>
    <h3 class="fs-md-32 text-heading lh-141 mb-3">
        <a href="<?php echo $post['url'];?>" class="text-heading hover-primary"><?php echo $post["title"];?></a>
    </h3>
    <p class="mb-4 lh-214"><?php echo $post["excerpt"];?></p>
    </div>
    <div class="card-footer bg-transparent p-0 border-0">
    <a href="<?php echo $post['url'];?>" class="btn text-heading border btn-lg shadow-none btn-outline-light border-hover-light">Ver más 
        <i class="far fa-long-arrow-right text-primary ml-1"></i>
    </a>
    </div>
</div>