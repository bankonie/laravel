<nav class="navbar navbar-expand-md navbar-dark fixed-top mynav">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">Laravel Project</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('/')}}">หน้าหลัก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('about')}}">เกี่ยวกับเรา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('service')}}">บริการ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('contact')}}">ติดต่อเรา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}">เข้าสู่ระบบ</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2 mt-2" type="search" placeholder="ค้นหา" aria-label="ค้นหา">
        </form>
      </div>
    </div>
  </nav>