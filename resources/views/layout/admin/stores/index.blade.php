@extends("layout.admin.admin")
@section("title","إدارة المتاجر")

@section("title-side")
<a href="{{asset('admin/stores/create')}}"
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
            <th>اسم مالك المتجر</th>
            <th>هاتف مالك المتجر</th>
            <th>الموقع</th>
            <th>الصورة</th>
            <th width="22%">خيارات</th>
        </tr>
    </thead>
    <tbody>
    @foreach($stores as $store)
        <tr>
            <td>1</td>
            <td>{{$store->name}}</td>
             <td>{{$store->owner_name}}</td>
             <td>{{$store->owner_phone}}</td>
             <td>{{$store->location}}</td>
            <td>
                <img src="{{ asset('storage/images/'.$store->image)}}" width="120">
            </td>
            <td>
            <td>
                <form method='post' action=''>
                    @csrf
                    <a href='{{URL('admin/stores/edit/'.$store->id)}}' class='btn btn-sm btn-primary'>تعديل</a>
                </form>
                <br>
                <form method='POST' action='{{URL('admin/stores/delete/' . $store->id)}}'>
                    @csrf
                    <button class='btn btn-danger btn-sm' type="submit">حذف</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>
<div>
    {{$stores->links('pagination::bootstrap-4')}}
</div>
@endsection
