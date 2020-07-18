
<div class="container my-3">
  <div class="d-flex flex-row">
    <div class="col-12 pl-0">
      <div class="d-flex flex-row align-items-center">
        <div class="col-3 pl-0">
          <form action="{{route('users.index')}}" method="get">
            <button class="btn btn-primary"><i class="fas fa-home"></i> Home</button>
          </form>
        </div>
        <div class="col-6">
          <h1 class="text-center text-muted">USERS TABLE</h1>
        </div>
        <div class="col-3">
                <form action="/search" method="get" class="d-flex" role="search">
                    <input type="text" name="search" class="form-control" placeholder="Search..."/>
                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                </form>
        </div>
      </div>
    </div>
  </div>
</div>