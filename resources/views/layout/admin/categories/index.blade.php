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
            <th>تم الإنشاء</th>
            <th>الصورة</th>
            <th width="22%">خيارات</th>
        </tr>
    </thead>
    @foreach($categories as $category)

    <tbody>
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
             <td>{{$category->created_at}}</td>
{{--             <td>{{$category->details}}</td>--}}
            <td>
                <img src="{{ asset('storage/images/'.$category->image)}}" width="90">
            </td>
            <td>
                <form method='post' action=''>
                    @csrf
                    <a href='{{URL('admin/categories/edit/'.$category->id)}}' class='btn btn-sm btn-primary'>تعديل</a>
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
@endsection
