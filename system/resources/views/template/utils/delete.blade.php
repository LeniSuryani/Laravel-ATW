<form action="{{$url}}" method="post" onsubmit="return confirm('boleh minta waktu istirahat mu nda? sebentar,                                  supaye saye nda berkecil hati ')">
    @csrf
    @method("delete")
    <button class="btn btn-danger"> <i class="fas fa-trash"></i> </button>
</form>