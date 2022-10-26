@extends('layout.app')

@section('title', 'Data Pembayaran')

@section('content')
<div class="card shadow">
    <div class="card-header">
        <h4 class="card-title">
            Data Pembayaran
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Order</th>
                        <th>Jumlah</th>
                        <th>No Rekening</th>
                        <th>Atas Nama</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-Pembayaran">
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="text" class="form-control" name="tanggal" placeholder="Tanggal" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" placeholder="Jumlah" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">No Rekening</label>
                                <input type="text" class="form-control" name="no_rekening" placeholder="No Rekening"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Atas Nama</label>
                                <input type="text" class="form-control" name="atas_nama" placeholder="Atas Nama"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="DITERIMA">DITERIMA</option>
                                    <option value="DITOLAK">DITOLAK</option>
                                    <option value="MENUNGGU">MENUNGGU</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection


@push('js')
<script>
    $(function() {
        $.ajax({
            url: '/api/payments',
            success: function({
                data
            }) {

                let row;
                data.map(function(val, index) {
                    tgl = new Date(val.created_at)
                    tgl_lengkap = `${tgl.getDate()}-${tgl.getMonth()}-${tgl.getFullYear()}`
                    row += `
                        <tr>
                            <td>${index+1}</td>
                            <td>${tgl_lengkap}</td>
                            <td>${val.id_order}</td>
                            <td>${val.jumlah}</td>
                            <td>${val.no_rekening}</td>
                            <td>${val.atas_nama}</td>
                            <td>${val.status}</td>
                            <td>
                                <a href="#modal-form" data-id="${val.id}" class="btn btn-warning modal-ubah">Edit</a>
                            </td>
                        </tr>
                        `;
                });

                $('tbody').append(row)
            }
        });

        $(document).on('click', '.btn-hapus', function() {
            const id = $(this).data('id')
            const token = localStorage.getItem('token')

            confirm_dialog = confirm('Apakah anda yakin?');

            if (confirm_dialog) {
                $.ajax({
                    url: '/api/payments/' + id,
                    type: "DELETE",
                    headers: {
                        "Authorization": 'Bearer ' + token
                    },
                    success: function(data) {
                        if (data.message == 'success') {
                            alert('Data berhasil dihapus')
                            location.reload()
                        }
                    }
                });
            }


        });

        function date(date) {
        var date = new Date(date);
        var day = date.getDate(); //Date of the month: 2 in our example
        var month = date.getMonth(); //Month of the Year: 0-based index, so 1 in our example
        var year = date.getFullYear()

        return `${day}-${month}-${year}`;
        }

        $(document).on('click', '.modal-ubah', function() {
            $('#modal-form').modal('show')
            const id = $(this).data('id');

            $.get('/api/payments/' + id, function({
                data
            }) {
                $('input[name="tanggal"]').val(date(data.created_at));
                $('input[name="jumlah"]').val(data.jumlah);
                $('input[name="no_rekening"]').val(data.no_rekening);
                $('input[name="atas_nama"]').val(data.atas_nama);
                $('select[name="status"]').val(data.status);
            });

            $('.form-Pembayaran').submit(function(e) {
                e.preventDefault()
                const token = localStorage.getItem('token')
                const frmdata = new FormData(this);

                $.ajax({
                    url: `api/payments/${id}?_method=PUT`,
                    type: 'POST',
                    data: frmdata,
                    cache: false,
                    contentType: false,
                    processData: false,
                    headers: {
                        "Authorization": 'Bearer ' + token
                    },
                    success: function(data) {
                        if (data.success) {
                            alert('Data berhasil diubah')
                            location.reload();
                        }
                    },
                    fail : function(data){
                        console.log(data)
                    }
                })
            });

        });

    });
</script>
@endpush
