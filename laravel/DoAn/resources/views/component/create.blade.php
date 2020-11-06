<div class="container mt-3">
    <div class="d-flex flex-row">
        <div class="col-12 px-0">
            <form action="{{route('')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group ">
                    <label class="text-uppercase font-weight-bold" for="name">name</label>
                    <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label class="text-uppercase font-weight-bold" for="price">price</label>
                    <input type="text" class="form-control rounded-0" placeholder="Price..." name="price">
                </div>
                <div class="form-group ">
                    <label class="text-uppercase font-weight-bold" for="image">image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input">
                        <label for="file" class="custom-file-label">Chọn file</label>
                    </div>
                </div>
                <div class="form-group ">
                    <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>