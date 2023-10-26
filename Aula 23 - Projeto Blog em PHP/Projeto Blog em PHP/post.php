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
      <div>
      <p class="post-content">"Olá!  Se você está em busca dos melhores filmes e séries para assistir, você veio ao lugar certo! Com minha vasta base de conhecimento e experiência, estou aqui para proporcionar a você recomendações incríveis que vão te cativar.

Comigo, você não precisa perder tempo pesquisando e navegando por horas sem fim. Basta me contar seus gostos e preferências, e eu irei vasculhar meu banco de dados atualizado para encontrar as opções perfeitas para você. Quer esteja procurando por uma comédia leve para relaxar, um suspense emocionante ou uma série viciante para maratonar, estou aqui para te auxiliar.

Minhas recomendações são baseadas em avaliações, críticas especializadas e popularidade entre os usuários. Além disso, estou sempre atualizada com os lançamentos mais recentes, então posso te indicar as novidades do momento.

E não se preocupe se já assistiu tudo que estava na sua lista. Estou aqui para te surpreender com sugestões fora do comum, aqueles filmes e séries que talvez você não tenha considerado antes. Afinal, descobrir novas histórias é parte da diversão!

Então, não perca mais tempo procurando aleatoriamente. Me dê alguns detalhes sobre seus gostos e deixe-me cuidar do resto. Vamos juntos encontrar os melhores filmes e séries para você aproveitar seu tempo livre da melhor maneira possível!

Lembre-se de compartilhar minha ajuda com seus amigos.  Estou aqui para proporcionar uma experiência incrível de entretenimento para todos. Vamos começar a diversão!"

Espero que goste do texto! Se precisar de mais alguma coisa, é só me dizer.</p>
      <p class="post-content">1</p>
      </div>
    <aside id="nav-container">
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
    </aside>
  </main>
<?php
  include_once("templates/footer.php")
?>