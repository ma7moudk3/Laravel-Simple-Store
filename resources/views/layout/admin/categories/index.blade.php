@extends("layout.admin.admin")
@section("title","إدارة الفئات")

@section("title-side")
<a href="{{asset('admin/categories/create')}}"
    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
    <span>
        <i class="la la-plus"></i>
        <span> اضافة</span>
    </span>
</a>
@endsection

@section("content")

<table class="table table-striped table-sm mt-3">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th>عنوان</th>
            <th>وصف قصير</th>
            <th>الصورة</th>
            <th width="22%">خيارات</th>
        </tr>
    </thead>
    @foreach($categories as $category)

    <tbody>
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
             <td>{{$category->details}}</td>
            <td>
                <img {{$category->image}}" width="120">
            </td>
            <td>
                <form method='post' action=''>
                    @csrf
                    <a href='{{URL('admin/categories/edit')}}' class='btn btn-sm btn-primary'>تعديل</a>
                </form>
                <br>
                <form method='POST' action='{{URL('admin/categories/delete/' . $category->id)}}'>
                    @csrf
                    <button class='btn btn-danger btn-sm' type="submit">حذف</button>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
<!-- <div class="card mb-3" style="max-width: 1500px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img style="max-width: 350px;"
                src="https://media.wired.com/photos/5e9f574ed42e6f0008f47b7a/master/w_2560%2Cc_limit/Gear-Top-Apple_new-iphone-se-white_04152020.jpg"
                class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title">Card title</h2>
                <p class="card-text">details</p>
                <p class="card-text"><small class="text-muted">slug</small></p>
                <p class="card-text"><small class="text-muted">active</small></p>
            </div>
        </div>
    </div>
</div> -->
@endsection
