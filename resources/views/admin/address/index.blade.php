@include('layouts/admin/head')


@include('layouts/admin/header')


@include('layouts/admin/sidebar')

<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{route('admin')}}">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="table-responsive">
    <h2>Create address</h2>
    <form action="{{route('create.a')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="name">เขียนที่อยู่</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="adderss">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="image">รูปภาพ</label>
            <input type="file" class="form-control" id="image" name="image"  placeholder="image">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>

    <div class="container-fluid">
    <div class="row mt-4">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">ที่อยู่</th>
                <th scope="col">รูปภาพ</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($address as $row)
            <tr>
                <th scope="row">{{$row->id }}</th>
                <td>{{$row->name}}</td>
                <td>
                    <img src="{{asset('/admin/imgs/'.$row->image)}}" width="150px" alt="">
                </td>
                <td>{{$row->created_at}}</td>
                <td>{{$row->updated_at}}</td>
                <td>
                    <a href="{{url('/admin/address/edit/'.$row->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{url('/admin/address/delete/'.$row->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach


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
