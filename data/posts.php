 <?php

  $posts = [
    [
      'id' => 1,
      'title' => 'Programando em PHP',
      'description' => 'Neste post você vai aprender tudo que precisa para ser um bom programador de PHP!',
      'tags' => ['programação', 'PHP', 'lógica de programação'],
      'img' => 'prog-5.jpg'
    ],
    [
      'id' => 2,
      'title' => 'Orientação a Objetos com Java',
      'description' => 'Aprenda o paradigma de orientação a objetos com Java, uma linguagem em alta no mercado.',
      'tags' => ['Java', 'OOP', 'Programação Avançada'],
      'img' => 'prog-2.jpg'
    ],
    [
      'id' => 3,
      'title' => 'A importância da lógica de programação',
      'description' => 'A lógica de programação é o ponto inicial de muitos estudantes de programação, será que é importante?',
      'tags' => ['lógica', 'programação', 'algoritmos'],
      'img' => 'prog-3.jpg',
    ],
    [
      'id' => 4,
      'title' => 'Programando em PHP',
      'description' => 'Neste post você vai aprender tudo que precisa para ser um bom programador de PHP!',
      'tags' => ['programação', 'PHP', 'lógica de programação'],
      'img' => 'prog-4.jpg'
    ],
  ];


  
  ?> 
  Inclusão do cabeçalho
<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

      if($post['id'] == $postId) {
        $currentPost = $post;
      }

    }

  }

?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur blanditiis illo adipisci earum minima alias unde itaque, eos perferendis, libero soluta qui mollitia ad nihil provident suscipit dolore! Voluptatem, rem.
    Error magni eligendi modi voluptatum dolor. In, illum nam veniam suscipit neque adipisci quo doloremque, illo aperiam officia blanditiis sequi magnam. Autem consequatur accusamus magnam tempore voluptate obcaecati praesentium iusto.
    Inventore enim quis velit placeat ipsum nemo consequatur sapiente vero quisquam exercitationem possimus ducimus natus, ab quam! Adipisci asperiores nesciunt, recusandae sequi assumenda facere accusamus, accusantium sunt odit, ducimus doloribus.
    Quis numquam, nesciunt sunt ab iste reiciendis. Qui quas dolorem omnis quis velit? Similique, cumque voluptatibus. Fugit et, vitae odit cumque itaque aut quisquam dolore, impedit, error nihil magni eius!
    Maxime blanditiis debitis expedita enim. Cum qui assumenda neque ea ad tenetur magni tempora quam labore quos nobis minima, est autem eos mollitia optio non ipsum accusantium! Delectus, qui non!</p>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur blanditiis illo adipisci earum minima alias unde itaque, eos perferendis, libero soluta qui mollitia ad nihil provident suscipit dolore! Voluptatem, rem.
    Error magni eligendi modi voluptatum dolor. In, illum nam veniam suscipit neque adipisci quo doloremque, illo aperiam officia blanditiis sequi magnam. Autem consequatur accusamus magnam tempore voluptate obcaecati praesentium iusto.
    Inventore enim quis velit placeat ipsum nemo consequatur sapiente vero quisquam exercitationem possimus ducimus natus, ab quam! Adipisci asperiores nesciunt, recusandae sequi assumenda facere accusamus, accusantium sunt odit, ducimus doloribus.
    Quis numquam, nesciunt sunt ab iste reiciendis. Qui quas dolorem omnis quis velit? Similique, cumque voluptatibus. Fugit et, vitae odit cumque itaque aut quisquam dolore, impedit, error nihil magni eius!
    Maxime blanditiis debitis expedita enim. Cum qui assumenda neque ea ad tenetur magni tempora quam labore quos nobis minima, est autem eos mollitia optio non ipsum accusantium! Delectus, qui non!</p>
  </div>
  <div class="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</main>

<!-- Inclusão do rodapé -->
<?php
  include_once("templates/footer.php");
?>