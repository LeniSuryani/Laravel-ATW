@extends('template.section.templateKeranjang')

@section('content')
<div class="ecom-contenthny py-3">
    <div class="container-fluid bg-dark py-lg-3 text-center">

        <div class="row">
            <div class="col-md-9" style=" display:block; margin-left: auto; margin-right:auto;">
                <form class="bg-light p-5 text-left" style="border-radius: 10px">
                    <h5 class=" text-bold">ALAMAT PENGIRIMAN</h5>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nama harus sesuai dengan KTP</div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label">Provinsi</label>
                                <select name="" class="form-control" onchange="gantiProvinsi(this.value)">
                                    <option value="">Pilih Provinsi</option>
                                    @foreach($list_provinsi as $provinsi)
                                    <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Kabupaten</label>
                                <select name="" class="form-control" id="Kabupaten" onchange="gantiKabupaten(this.value)">
                                    <option value="">Pilih Kabupaten</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Kecamatan</label>
                                <select name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
                                    <option value="">Pilih Provinsi</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Desa</label>
                                <select name="" class="form-control" id="desa">
                                    <option value="">Pilih Provinsi</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ekspedisi</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection




@push('script')
<script>
    function gantiProvinsi(id) {
        $.get("api/provinsi/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#Kabupaten").html(option)
        });
    }

    function gantiKabupaten(id) {
        $.get("api/kabupaten/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#kecamatan").html(option)
        });
    }

    function gantiKecamatan(id) {
        $.get("api/kecamatan/" + id, function(result) {
            result = JSON.parse(result)
            option = ""
            for (item of result) {
                option += `<option value="${item.id}">${item.name}</option>`;
            }
            $("#desa").html(option)
        });
    }
</script>
@endpush