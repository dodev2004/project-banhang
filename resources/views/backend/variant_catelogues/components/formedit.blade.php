<form action="{{route("admin.variant_catelogue.update",$id)}}" method="POST" class="form-update" style="background-color: white; padding:40px" novalidate >
    @csrf
    <div class="row">
        <div class="col-md-6">
                <h2>Thông tin danh mục biến thể</h2>
                <span>
                    Những trường có dấu ("*") là những trường bắt buộc và không được bỏ trống
                </span>
               
        </div>
        <div class="col-md-6 " style="padding:20px 0 0 50px">
            <div class="row" style="display: flex; flex-wrap:wrap">
                <div class="form-group col-md-12">
                    <label for="">Tên danh mục biến thể *</label>
                    <input type="text"  name="name" class="form-control" value="{{old("name") ?? $data->name}}" autocomplete=""> 
                     <p  class=" text-danger"></p>         
                  
                      
                </div>
               
            </div>
        </div>
    </div>
    <div class="row text-right mt-4">
          <button class="btn btn-primary">Thêm mới</button>
    </div>
  
</form>