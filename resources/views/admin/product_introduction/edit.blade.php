@include('layouts/admin/head')


@include('layouts/admin/header')


@include('layouts/admin/sidebar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="table-responsive">
    <h2>Create product_introduction</h2>
    <form action="{{url('/admin/product_introduction/update/'.$product_introduction->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">ชื่อ</label>
            <input type="text" class="form-control" id="name" name="name"  value="{{$product_introduction->name}}">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="detail">รายละเอียด</label>
            <input type="text" class="form-control" id="detail" name="detail"  value="{{$product_introduction->detail}}">
            @error('detail')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>



        <div class="form-group">
        <label for="image">รูปภาพ</label>
        <div class="custom-file">
            <input  type="file" class="custom-file-input" name="image"  id="image">
            <label class="custom-file-label" for="image">Choose file</label>
        </div>
        <div class="mt-4">
        <img id="showImage" src="{{asset('/admin/imgs/'.$product_introduction->image)}}" width="150px" alt="">
        </div>
        </div>

        <button type="submit" name="submit" class="btn btn-success">Update</button>
    </form>
    
        </tbody>
    </table>
    </div>
</div>

    

      </section>
     
@include('layouts/admin/footer')
    
    </section>
    <!--main content end-->
  </section>


</div>
<script type="text/javascript">
    $(document).ready(function(){
      $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src',e.terget.result);
        }
        reader.readerAsDataURL(e.target.files['0']);
      });
    });
</script>