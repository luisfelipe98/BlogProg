<?php
    include_once("templates/header.php");

    if (isset($_GET["id"])) {

        $postId = $_GET["id"];
        $currentPost;

        // Procurando o post com o id passado
        foreach($posts as $post) {
            if ($post["id"] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    <main class="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost["title"] ?></h1>
            <p id="post-description"><?= $currentPost["description"] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost["img"] ?>" alt="<?= $currentPost["title"] ?>">
            </div>
            <p id="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos optio 
                deserunt aut eius illo mollitia molestias hic alias error rem reprehenderit laboriosam aperiam,
                commodi numquam quas sunt eligendi laborum! Sint? Nam ducimus fugiat quae? Possimus, similique 
                quam, illo expedita rerum laboriosam, id debitis odio autem necessitatibus praesentium 
                accusamus eligendi? Nulla in quis consectetur aut voluptates nobis reiciendis vel sint dolore.
                Saepe id architecto ipsa tempora, illum dolorum ad, voluptate soluta cumque quibusdam 
                consequuntur laborum minus laudantium nam vero obcaecati? Vero eveniet debitis mollitia odit 
                sit nihil tempora incidunt, totam quidem.
                Atque quidem soluta numquam. Neque ea sequi sint. Quibusdam illum facere, sapiente ea ratione 
                iusto excepturi, cum necessitatibus voluptatum at nesciunt optio inventore dolorem odio sequi. 
                Porro vel repudiandae fugiat. Nobis quisquam qui aliquid temporibus minima facilis, dolor 
                dolores, nisi molestiae in culpa eius architecto ratione accusamus. Accusantium fuga, odit 
                fugiat dicta animi ab atque itaque sint at? Eius, ipsum.
            </p>
            <p id="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos optio 
                deserunt aut eius illo mollitia molestias hic alias error rem reprehenderit laboriosam aperiam,
                commodi numquam quas sunt eligendi laborum! Sint? Nam ducimus fugiat quae? Possimus, similique 
                quam, illo expedita rerum laboriosam, id debitis odio autem necessitatibus praesentium 
                accusamus eligendi? Nulla in quis consectetur aut voluptates nobis reiciendis vel sint dolore.
                Saepe id architecto ipsa tempora, illum dolorum ad, voluptate soluta cumque quibusdam 
                consequuntur laborum minus laudantium nam vero obcaecati? Vero eveniet debitis mollitia odit 
                sit nihil tempora incidunt, totam quidem.
                Atque quidem soluta numquam. Neque ea sequi sint. Quibusdam illum facere, sapiente ea ratione 
                iusto excepturi, cum necessitatibus voluptatum at nesciunt optio inventore dolorem odio sequi. 
                Porro vel repudiandae fugiat. Nobis quisquam qui aliquid temporibus minima facilis, dolor 
                dolores, nisi molestiae in culpa eius architecto ratione accusamus. Accusantium fuga, odit 
                fugiat dicta animi ab atque itaque sint at? Eius, ipsum.
            </p>
        </div>
        <aside class="nav-container">
            <h1 id="tags-title">Tags</h1>
            <ul id="tags-list">
                <?php foreach ($currentPost["tags"] as $tag) : ?>
                    <li><a href="#"><?= $tag ?></a></li>    
                <?php endforeach; ?>    
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach ($categories as $category) : ?>
                    <li><a href="#"><?= $category ?></a></li>    
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>