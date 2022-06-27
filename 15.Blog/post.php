<?php
    include_once("templates/header.php");

    $currentPost;

    if (isset($_GET["id"])) {
        $postId = $_GET["id"];        

        foreach ($posts as $post) {
            if ($post["id"] == $postId) {
                $currentPost = $post;
                break;
            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost["title"] ?></h1>
            <p id="post-description"><?= $currentPost["description"] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost["img"] ?>" alt="<?= $currentPost["title"] ?>">
                <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque ad minus sequi veritatis nulla doloribus asperiores nobis, aperiam quisquam repudiandae earum, cum iste deleniti dolorem recusandae repellendus doloremque fugit molestiae?
                Fugiat nisi, veniam ducimus iste esse dolores, quo voluptate laboriosam molestias inventore porro praesentium repudiandae at facilis ab tempore, eum aliquid reiciendis est natus. Corrupti cum rem perferendis saepe voluptatum.
                Amet blanditiis tempore optio explicabo atque inventore cum mollitia nobis beatae illum iusto iure quaerat adipisci ratione dolorum laboriosam reiciendis obcaecati voluptates excepturi, impedit vitae. Iusto ea possimus neque explicabo.
                Placeat quisquam excepturi quas! Eum ducimus similique beatae perspiciatis tenetur sapiente a assumenda voluptas laborum delectus! Sunt id itaque molestias earum, at placeat inventore repellat ipsa voluptatem sequi in est.
                Ad, hic? Culpa libero possimus quod molestias facere, ab sapiente? Voluptates praesentium, adipisci quas est voluptas architecto magnam officiis culpa animi fugiat atque vero expedita tempora obcaecati, aliquam accusamus. Dolores!</p>
            </div>
        </div>
    </main>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tag-list">
            <?php foreach ($currentPost["tags"] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
  
<?php
    include_once("templates/footer.php");
?>