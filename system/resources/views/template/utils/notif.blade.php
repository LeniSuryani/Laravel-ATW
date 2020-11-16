@foreach(['success', 'warning', 'danger', 'dark'] as $status)
@if (session($status))
<div class="alert alert-{{$status}} alert-dismissable custom-{{$status}}-box">
    <a href="#" class="close mr-4" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>{{ session($status) }}</strong>
</div>
@endif
@endforeach