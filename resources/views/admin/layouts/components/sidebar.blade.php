<div class="p-4 h-100">
  <div class="vstack h-100 justify-content-between">
    <div>
      <div class="hstack gap-2">
        <img src="{{url('HK.jpg')}}" width="40px" height="auto" alt="">
        <div>
          <p class="fw-bold mb-0">Belajar Kompas</p>
          <p class="text-secondary mb-0">admin dashboard</p>
        </div>
      </div>
      <hr>
      <ul class="nav nav-pills flex-column gap-2 mt-4">
          <li class="nav-item">
            <a class="nav-link fs-6 d-flex gap-3 {{ request()->is('admin/users/*', 'admin/users') ? 'active' : 'text-secondary' }}" aria-current="page" href="/admin/users"><i class="bi bi-people-fill"></i> Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6 d-flex gap-3 {{ request()->is('admin/kelas/*', 'admin/kelas') ? 'active' : 'text-secondary' }}" href="/admin/kelas"><i class="bi bi-book-fill"></i> Kelas</a>
          </li>
      </ul>
    </div>
    <div>
      <hr>
      <div class="hstack justify-content-around">
        <i class="bi bi-person-circle" style="font-size: 1.5rem; color: cornflowerblue;"></i>
        <p class="mb-0">Admin John Doe</p>
      </div>
    </div>
  </div>
</div>