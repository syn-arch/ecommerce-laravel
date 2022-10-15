@extends('layout.app')

@section('title', 'Data Pesanan Baru')

@section('content')
<div class="card shadow">
    <div class="card-header">
        <h4 class="card-title">
            Data Pesanan Baru
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pesanan</th>
                        <th>Invoice</th>
                        <th>Member</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

@endsection


@push('js')
<script>
    $(function() {

        function rupiah(angka){
            const format = angka.toString().split('').reverse().join('');
            const convert = format.match(/\d{1,3}/g);
            return 'Rp ' + convert.join('.').split('').reverse().join('')
        }

        function date(date) {
            var date = new Date(date);
            var day = date.getDate(); //Date of the month: 2 in our example
            var month = date.getMonth(); //Month of the Year: 0-based index, so 1 in our example
            var year = date.getFullYear()

            return `${day}-${month}-${year}`;
        }

        const token = localStorage.getItem('token')
        $.ajax({
            url: '/api/pesanan/baru',
            headers: {
                "Authorization": 'Bearer ' + token
            },
            success: function({
                data
            }) {

                let row;
                data.map(function(val, index) {
                    row += `
                        <tr>
                            <td>${index+1}</td>
                            <td>${date(val.created_at)}</td>
                            <td>${val.invoice}</td>
                            <td>${val.member.nama_member}</td>
                            <td>${rupiah(val.grand_total)}</td>
                            <td>
                                <a href="#" data-id="${val.id}" class="btn btn-success btn-aksi">Konfirmasi</a>
                            </td>
                        </tr>
                        `;
                });

                $('tbody').append(row)
            }
        });

        $(document).on('click','.btn-aksi',function(){
            const id = $(this).data('id')

            $.ajax({
                url : '/api/pesanan/ubah_status/' + id,
                type : 'POST',
                data : {
                    status : 'Dikonfirmasi'
                },
                headers: {
                    "Authorization": 'Bearer ' + token
                },
                success : function(data){
                    location.reload()
                }
            })
        })

    });
</script>
@endpush
