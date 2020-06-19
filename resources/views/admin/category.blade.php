@extends('admin.index')
@section('content')
<!-- Category list -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Danh sách danh mục</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
                <a href="javascript:;" class="btn btn-info" onclick="category.showModal()" id="addcategory">Thêm mới</a>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              <table id="tbCategory" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Ngày khởi tạo</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>


              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- trash list -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Danh sách tạm xóa</h3>
        </div>


      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              <table id="tbCateTrash" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Ngày tạm xóa</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>


              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- Modal -->
<div id="categoryModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form id="formCategory">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm danh mục mới</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <input type="hidden" id="categoryId" name="categoryId" value="0">
                <div class="modal-body">
                    <div class="row form-group">
                        <div class="col-4">
                            <label>Tên danh mục</label>
                        </div>
                        <div class="col-8">
                            <input type="text" id="name" name="name" class="form-control">
                            <span class="errors-name text-danger"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-info" onclick="category.save()">Lưu</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </>
        </form>
    </div>
</div>


  @endsection
