@include('layouts/admin/head')


@include('layouts/admin/header')


@include('layouts/admin/sidebar')
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i> user</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{route('admin')}}">Home</a></li>
                    <li><i class="fa fa-laptop"></i>User</li>
                </ol>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row mt-4">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">username</th>
                            <th scope="col">type</th>
                            <th scope="col">created_at</th>
                            <th scope="col">updated_at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="user">{{$user->id }}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->type}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>
                                <a href="{{url('/admin/user/'.$user->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('/admin/user/delete/'.$user->id)}}" class="btn btn-danger">Delete</a>
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
