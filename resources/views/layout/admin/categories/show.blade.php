@extends("layouts.admin")
@section("title","عرض")
@section("title-side")
@endsection
@section("content")
<div class="m-portlet m-portlet--mobile">
    <form method='post' action='{{route("categories.index")}}'>
        @csrf
        <div class='m-form'>
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">العنوان</label>
                        <div class="col-lg-6">
                            <input disabled id="title" value="{{ $item->title }}" name="title" placeholder="title"
                                class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الوصف القصير</label>
                        <div class="col-lg-6">
                            <input disabled id="slug" value="{{ $item->slug }}" name="slug" placeholder="الوصف القصير"
                                class="form-control" type="text">
                        </div>
                    </div>
                    <div class="m-form__group form-group row">
                        <label class=" col-lg-3 col-form-label">فعال / غير فعال</label>
                        <div class="m-radio-inline col-lg-6">
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input disabled {{old('active')=='1'?"checked":""}} type="radio" name="active"
                                    checked="" value="1" aria-describedby="account_group-error"> فعال
                                <span></span>
                            </label>
                            <label class="m-radio m-radio--solid m-radio--brand">
                                <input disabled {{old('active')=='0'?"checked":""}} type="radio" name="active"
                                    value="0"> غير
                                فعال
                                <span></span>
                            </label>
                            <!-- <input disabled {{$item->active?"checked":""}} type="checkbox" name="active" /> -->
                        </div>
                        <span class="m-form__help"></span>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">التفاصيل</label>
                        <div class="col-lg-6">
                            <textarea disabled id="details" rows='8' name="details" placeholder="أدخل التفاصيل"
                                class="form-control">{{ $item->details }}</textarea>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label class="col-lg-3 col-form-label">الصورة</label>
                        <div class="col-lg-6">
                            <input disabled type='file' class="form-control" name="image" id="image" />
                            @if($item->image)
                            <hr>
                            <img style='max-width:250px' src='{{asset("storage/images/$item->image")}}' />
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <a href='{{ route("categories.edit",$item->id) }}' class="btn btn-primary">تعديل</a>
                            <a href="{{asset('admin/categories')}}" class="btn btn-secondary">الغاء الامر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
