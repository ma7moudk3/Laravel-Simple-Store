@extends("layout.admin.admin")
@section("title","الرسائل")


@section("content")
    <div class="col-xl-12">
        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
            <table class="table table-striped table-sm mt-3">
                <thead>
                <tr>
                    <th width="5%">#</th>
                    <th>اسم المرسل</th>
                    <th>إيميل المرسل</th>
                    <th>الرسالة</th>
                    <th>خيارات؟</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>dsf</td>
                        <td>sfd</td>
                        <td>sfd</td>
                        <td>sfd</td>
                        <td>
                            <form method='post' action=''>
                                @csrf
                                @method("delete")
                                <a href='' class='btn btn-danger btn-sm'
                                   onclick='return confirm("هل تريد حذف الرسالة؟")'>حذف الرسالة</a>
                            </form>
                        </td>

                    </tr>

                </tbody>
            </table>

        </div>
    </div>
@endsection
