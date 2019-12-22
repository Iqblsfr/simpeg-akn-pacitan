<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('@web/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard',
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                //         [
                //             'label' => 'Master',
                //             'icon' => 'fa fa-database',
                //             'url' => '#',
                //             'items' => [
                //                 [
                //                     'label' => 'Master1',
                //                     'icon' => 'fa fa-database',
                //                     'url' => '?r=master1/',
				    // 'active' => $this->context->route == 'master1/index'
                //                 ],
                //                 [
                //                     'label' => 'Master2',
                //                     'icon' => 'fa fa-database',
                //                     'url' => '?r=master2/',
				    // 'active' => $this->context->route == 'master2/index'
                //                 ]
                //             ]
                //         ],
                        [
                           'label' => 'Rekap Absensi',
                           'icon' => 'fa fa-calendar',
                           'url' => ['/absen'],
                           'active' => $this->context->route == 'absen/index',
                        ],

                        [
                           'label' => 'Daftar Pegawai',
                           'icon' => 'fa fa-briefcase',
                           'url' => ['/pegawai'],
                           'active' => $this->context->route == 'pegawai/index',
                        ],

                        [
                           'label' => 'Rekap Gaji',
                           'icon' => 'fa fa-heartbeat',
                           'url' => ['/gaji'],
                           'active' => $this->context->route == 'gaji/index',
                        ],

                        [
                           'label' => 'Rekap Cuti dan Dinas Luar',
                           'icon' => 'fa fa-plane',
                           'url' => ['/cuti-dl'],
                           'active' => $this->context->route == 'cuti-dl/index',
                        ],

                        [
                           'label' => 'Berita',
                           'icon' => 'fa fa-globe',
                           'url' => ['/info'],
                           'active' => $this->context->route == 'info/index',
                        ],

                        [
                            'label' => 'Users',
                            'icon' => 'fa fa-user',
                            'url' => ['/user'],
                            'active' => $this->context->route == 'user/index',
                        ],
                        ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                        ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                    ],
                ]
        )
        ?>

    </section>
    <!-- /.sidebar -->
</aside>