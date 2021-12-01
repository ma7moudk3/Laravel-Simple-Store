@extends("layout.admin.admin")
@section("title","إضافة متجر")

@section("title-side")

@endsection

@section("js")
    <script src="{{ asset('metronic/assets/demo/default/custom/crud/forms/widgets/summernote.js') }}"
            type="text/javascript"></script>

@endsection
@section("content")
    <div class="m-portlet m-portlet--mobile">
        <form enctype='multipart/form-data' method="post" action='{{URL('admin/stores/store')}}'>
            @csrf
            <div class='m-form'>
                <div class="m-portlet__body">
                    <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">اسم المتجر</label>
                            <div class="col-lg-6">
                                <input id="title" name="name" placeholder="اسم المتجر"
                                       class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="m-form__section m-form__section--first">
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">فئة المتجر</label>
                                <div class="col-lg-6">
                                    <select type="text" name="category_id" id="nationality" class="form-control">
                                        <option value="-1"></option>
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
                            <input id="owner_name" name="owner_name" placeholder="اسم مالك المتجر"
                                   class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">رقم هاتف مالك المتجر</label>
                        <div class="col-lg-6">
                            <input id="owner_phone"  name="owner_phone" placeholder="رقم هاتف مالك المتجر"
                                   class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الوصف القصير</label>
                        <div class="col-lg-6">
                            <input id="slug" value="{{$store->name}}" name="details"
                                   placeholder="الوصف القصير" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الصورة</label>
                        <div class="col-lg-6">
                            <input multiple id="file" name="image" type='file' class="form-control">
                        </div>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions">

                        <div class="row" style="margin-top: 20px;margin-bottom: 20px">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6" style="margin-top: 20px;margin-bottom: 20px">
                                <button type="submit" class="btn btn-primary">اضافة</button>
                                <a href="{{asset('admin/categories')}}" class="btn btn-secondary">الغاء الامر</a>
                            </div>

                        </div>
                    </div>
                </div>
                </div>

        </form>
    </div>



@endsection
