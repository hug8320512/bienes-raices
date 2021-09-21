<!-- WE SHOULD HAVE ACCESS TO $Blog OBJECT AND $latestPosts  VAR -->
<?php if(!isset($latestPosts)) return false;?>


<div class="card mb-4">
    <div class="card-body px-6 pt-5 pb-6">
    <h4 class="card-title fs-16 lh-2 text-dark mb-3">Últimos Posts</h4>
    <ul class="list-group list-group-flush">
    <?php foreach($latestPosts as $post):?>
        <li class="list-group-item px-0 pt-0 pb-3">
        <div class="media">
            <div class="position-relative mr-3">
            <a href="<?php echo $post['url'];?>" class="d-block w-100px rounded pt-11 bg-img-cover-center" style="background-image: url('<?php echo $post['image'];?>')">
            </a>
            </div>
            <div class="media-body">
            <h4 class="fs-14 lh-186 mb-1">
                <a href="<?php echo $post['url'];?>" class="text-dark hover-primary"><?php echo $post["title"];?></a>
            </h4>
            <div class="text-gray-light"><?php echo $post['created'];?></div>
            </div>
        </div>
        </li>
        <?php endforeach;?>
    </ul>
    </div>
    </div>