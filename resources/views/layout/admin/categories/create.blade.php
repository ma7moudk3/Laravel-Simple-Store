@extends("layout.admin.admin")
@section("title","إضافة فئة")

@section("title-side")

@endsection

@section("js")
<script src="{{ asset('metronic/assets/demo/default/custom/crud/forms/widgets/summernote.js') }}" type="text/javascript"></script>

@endsection
@section("content")
<div class="m-portlet m-portlet--mobile">
    <form enctype='multipart/form-data' method="post" action=''>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">العنوان</label>
                        <div class="col-lg-6">
                            <input id="title" value="{{ old('title') }}" name="title" placeholder="العنوان"
                                class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الوصف القصير</label>
                        <div class="col-lg-6">
                            <input id="slug" value="{{ old('slug') }}" name="slug" placeholder="الوصف القصير"
                                class="form-control" type="text">
                        </div>
                    </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">التفاصيل</label>
                        <div class="col-lg-6">
                            <textarea id="details" rows='8' name="details" placeholder="أدخل التفاصيل"
                                class="form-control summernote">{{old("details")}}</textarea>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الصورة</label>
                        <div class="col-lg-6">
                            <input multiple id="file" name="image" type='file' class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">

                    <div class="row" style="margin-top: 20px;margin-bottom: 20px">
                        <div class="col-lg-3" ></div>
                        <div class="col-lg-6" style="margin-top: 20px;margin-bottom: 20px">
                            <button type="submit" class="btn btn-primary">اضافة</button>
                            <a href="{{asset('admin/categories')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>

                    </div>
                </div>
            </div>
    </form>
        </div>
    </form>
</div>

@endsection
