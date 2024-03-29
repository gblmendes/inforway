<?php
$pageInfo = array(
    'title' => 'Criar um Novo Curso',
    'description' => 'Crie um novo curso no sistema',
    'pageName' => 'create_course',
);

include_once('../components/admin/header.php');
?>

<!-- Conteúdo do dashboard -->
<main class="container py-5">
    <div class="row">
        <!-- Sidebar do dashboard -->
        <div class="col-md-3">
            <?php
            include_once('../components/admin/menu_sidebar.php');
            ?>
        </div>
        <!-- Main do dashboard -->
        <section class="col-md-9">
            <h2><?= $pageInfo['title'] ?></h2>
            <p><?= $pageInfo['description'] ?></p>
            <hr>
            <div class="card-alunos">
                <div class="card-body">
                    <form action="requests/request_create_courses.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="title">Título do Curso</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título">
                        </div>
                        <div class="form-group mb-3">
                            <label for="teacher">Nome do Professor</label>
                            <input type="text" class="form-control" id="teacher" name="teacher" placeholder="Insira o nome do professor">
                        </div>
                        <div class="form-group mb-3">
                            <label for="content">Descrição do Curso</label>
                            <textarea class="form-control" id="content" rows="5" required name="content" placeholder="Insira a descrição"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="price">Preço do Curso</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Insira o preço">
                        </div>
                        <div class="form-group mb-3">
                            <label for="image">Imagem do Curso</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-success mb-2">Publicar</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
$currentPage = 'new_post';
include_once('../components/admin/footer.php');
?>