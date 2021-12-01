@extends("layout.admin.admin")
@section("title","تعديل المتجر")

@section("title-side")

@endsection

@section("js")
<script>
    $(".summernote").summernote({height:400})
</script>
@endsection
@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype="multipart/form-data" method='post' action="{{url('admin/stores/update/'.$store->id)}}">
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">العنوان</label>
                        <div class="col-lg-6">
                            <input id="title" value="{{$store->name}}" name="name" placeholder="title"
                                class="form-control" type="text" >
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الوصف القصير</label>
                        <div class="col-lg-6">
                            <input id="slug" value="{{$store->details}}" name="details"
                                placeholder="الوصف القصير" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="m-form__section m-form__section--first">
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">فئة المتجر</label>
                                <div class="col-lg-6">
                                    <select type="text" name="category_id" id="nationality" class="form-control">
                                        <option value="{{$store->category_id}}"></option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">اسم مالك المتجر</label>
                        <div class="col-lg-6">
                            <input id="owner_name" name="owner_name" value="{{$store->owner_name}}" placeholder="اسم مالك المتجر"
                                   class="form-control" type="text">
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">رقم هاتف مالك المتجر</label>
                        <div class="col-lg-6">
                            <input id="owner_phone"  name="owner_phone" value="{{$store->owner_phone}}" placeholder="رقم هاتف مالك المتجر"
                                   class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الصورة</label>
                        <div class="col-lg-6">
                            <input type='file' class="form-control" name="image" id="image" />
                            <hr>
                            <img style='max-width:250px' src="{{ asset('storage/images/'.$store->image)}}"/>

                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <button class="btn btn-primary" type="submit">تحديث</button>
                            <a href="{{asset('admin/categories')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
