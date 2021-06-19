<header>
  <nav class="navbar navbar-light bg-info">
    @if (user_signed_in?)
      @if (!current_user.is_admin)
        <div class='navbar-brand mr-auto'>
          <h1>カメラ📷批評</h1><h6>ver 1.2</h6>
        </div>

        <ul class="nav">
          <li class="nav-item nav-username">ようこそ、{{ $current_user.name }}さん！</li>
          <li class="nav-item">
            <?= link_to "トップ", root_path, class: "fas fa-home nav-link" ?>
          </li>
          <li class="nav-item">
            <?= link_to "マイページ", user_path(current_user), class: "fas fa-users nav-link" ?>
          </li>
          <li class="nav-item">
            <?= link_to "製品一覧", products_path, class: "fas fa-camera nav-link" ?>
          </li>
          <li class="nav-item">
            <?= link_to "ログアウト", destroy_user_session_path, method: :delete, class: "fas fa-sign-out-alt nav-link" ?>
          </li>
        </ul>

      @else
        <div class='navbar-brand mr-auto'>
          <h1>カメラ📷批評</h1><h6>管理者サイト</h6>
        </div>

        <ul class="nav">
          <li class="nav-item">
            <?= link_to "トップ", root_path, class: "fas fa-home nav-link" ?>
          </li>
          <li class="nav-item">
            <?= link_to "ユーザー一覧", users_path(current_user), class: "fas fa-users nav-link" ?>
          </li>
          <li class="nav-item">
            <?= link_to "製品登録", new_product_path, class: "fas fa-folder-plus nav-link" ?>
          </li>
          <li class="nav-item">
            <?= link_to "製品一覧", products_path, class: "fas fa-camera nav-link" ?>
          </li>
          <!--<li class="nav-item">-->
          <!--  <%#= link_to "メーカー一覧", makers_path, class: "fas fa-building nav-link" %>-->
          <!--</li>-->
          <li class="nav-item">
            <?= link_to "ログアウト", destroy_user_session_path, method: :delete, class: "fas fa-sign-out-alt nav-link" ?>
          </li>
        </ul>
      @endif

    @else
      <div class='navbar-brand mr-auto'>
        <h1>カメラ📷批評</h1>
      </div>

      <ul class="nav">
        <li class="nav-item">
          <?= link_to "トップ", root_path, class: "fas fa-home nav-link" ?>
        </li>
        <li class="nav-item">
          <?= link_to "About", about_path, class: "fas fa-info-circle nav-link" ?>
        </li>
        <li class="nav-item">
          <?= link_to "新規登録", new_user_registration_path, class: "fas fa-user-plus nav-link" ?>
        </li>
        <li class="nav-item">
          <?= link_to "ログイン", new_user_session_path, class: "fas fa-sign-in-alt nav-link" ?>
        </li>
      </ul>
    @endif
  </nav>
</header>