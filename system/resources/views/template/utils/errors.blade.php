@if($errors->has($item))
@foreach($errors->get($item) as $msg)
<label for="" class="label text-danger" style="background: white;"> {{$msg}}</label>
@endforeach
@endif