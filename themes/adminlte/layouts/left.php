<?php
    use app\models\PelayananStatus;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web').'/images/polindra.png'; ?>" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= ucwords(Yii::$app->user->identity->username) ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> 
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['admin/index'],],
                    [
                        'label' => 'Master SPK',
                        'icon' => 'th',
                        'url' => '#',
                        'items' => [
                     ['label' => 'Alternatif', 'icon' => 'circle-o', 'url' => ['alternatif/index']],
                     ['label' => 'Nilai', 'icon' => 'circle-o', 'url' => ['nilai/index']],
                     ['label' => 'Kriteria', 'icon' => 'circle-o', 'url' => ['kriteria/index']],
                     ['label' => 'Mahasiswa', 'icon' => 'circle-o', 'url' => ['mahasiswa/index']],
                     ['label' => 'Dosen', 'icon' => 'circle-o', 'url' => ['dosen/index']],
                     ['label' => 'Role', 'icon' => 'circle-o', 'url' => ['role/index']],  
                ],
                ],
                ['label' => 'SISTEM','options' => ['class' => 'header']],
                      [
                        'label' => 'Sistem',
                        'icon' => 'th',
                        'url' => '#',
                        'items' => [
                    ['label' => 'User', 'icon' => 'user', 'url' => ['/user'],],
                    ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post">{icon} {label}</a>' , 'visible' => !Yii::$app->user->isGuest],
                ],
                ],
            ]
            ]
        ) ?>

    </section>

</aside>
