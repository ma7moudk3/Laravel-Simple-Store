@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if(\Session::get("msg"))
<?php
    $msg = \Session::get("msg");
    $class = 'alert-info';
    if(strstr(strtolower($msg),"s:")){
        $msg = substr($msg,2);//remove first 2 letters
        $class = 'alert-success';
    }
    else if(strstr(strtolower($msg),"i:")){
        $msg = substr($msg,2);//remove first 2 letters
        $class = 'alert-info';
    }
    else if(strstr(strtolower($msg),"w:")){
        $msg = substr($msg,2);//remove first 2 letters
        $class = 'alert-warning';
    }
    else if(strstr(strtolower($msg),"e:")){
        //"e:some message"
        $msg = substr($msg,2);//remove first 2 letters
        $class = 'alert-danger';
    }
?>
<div class='alert {{$class}}   fade show'>{{$msg}}
    <button type="button" class="close p-0 ml-auto" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif