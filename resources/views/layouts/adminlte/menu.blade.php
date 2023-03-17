

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-secondary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('AdminLTE/dist/img/ctic.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CTIC-Fpolis</span>
    </a>
    
 <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-home nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-file-pdf nav-icon"></i>
              <p>
                Docs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-file-pdf"></i>
                  <p>
                    Laudo Ténico
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>
                      <p>Novo Laudo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>
                      <p>Últimos Laudos</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-file-pdf"></i>
                  <p>
                    Incorporação
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>
                      <p>Nova Incorporação</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class=""></i>
                      <p>Ultimas Incorporações</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-file-pdf"></i>
              <p>Resp por Lab de Info</p>
            </a>
          </li>
            </ul>
          </li>
          <li class="nav-header">SISTEMAS IFSC</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                SIG
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    SIGRH
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="https://sigrh.ifsc.edu.br/sigrh/public/home.jsf" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Logar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Bater Ponto</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="https://sigrh.ifsc.edu.br/sigrh/frequencia/ponto_eletronico/consulta/consulta_ponto_eletronico.jsf" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Espelho Ponto</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    DGP
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="https://dgp.ifsc.edu.br/sigp/central/login/login.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Logar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="nao tenho acesso ao manter ainda" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manter</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="https://dgp.ifsc.edu.br/sigp/index.php?pg=sigp&md=" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pessoas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="https://dgp.ifsc.edu.br/sigp/index.php?pg=patrimonio&md=patrimonioconsultabenscampus" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Patrimonio</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="http://172.16.0.222/fog" class="nav-link">  
              <i class="nav-icon fas fas fa-cloud-download-alt" nav-icon></i>
              <p>
                Fog
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://172.16.0.223:8443/guacamole" class="nav-link">  
              <i class="nav-icon fas fa-award"></i>
              <p>
                Apache Guacamole
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://gmail.com/" class="nav-link">  
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Email
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
