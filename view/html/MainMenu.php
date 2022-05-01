    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="../UsuHome/index.php"><span>[</span>- Empresa -<span>]</span></a></div>

    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-20">MENU</label>
        <div class="br-sideleft-menu">

            <a href="../UsuHome/index.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Inicio</span>
                </div>
            </a>
            <?php
            if ($_SESSION["id_rol"] == 1) {
            ?>
                <a href="../UsuCurso/index.php" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
                        <span class="menu-item-label">Mis cursos</span>
                    </div>
                </a>
            <?php
            } else {
            ?>
                <a href="../AdminMntUsuario/index.php" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                        <span class="menu-item-label">Mnt. Usuario</span>
                    </div>
                </a>

                <a href="../AdminMntCursos/index.php" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
                        <span class="menu-item-label">Mnt. Curso</span>
                    </div>
                </a>

                <a href="../AdminMntInstructro/index.php" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i>
                        <span class="menu-item-label">Mnt. Instructor</span>
                    </div>
                </a>

                <a href="../AdminMntCategoria/index.php" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <span class="menu-item-label">Mnt. Categoría</span>
                    </div>
                </a>

                <a href="../AdminDetalleCertificado/index.php" class="br-menu-link">
                    <div class="br-menu-item">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                        <span class="menu-item-label">Detalle Certificado</span>
                    </div>
                </a>
            <?php
            }
            ?>
            <a href="../UsuPerfil/index.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon icon ion-ios-gear-outline tx-20"></i>
                    <span class="menu-item-label">Perfil</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="../html/Logout.php" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon icon ion-power tx-20"></i>
                    <span class="menu-item-label">Cerrar Sesion</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
        </div><!-- br-sideleft-menu -->
    </div><!-- br-sideleft -->