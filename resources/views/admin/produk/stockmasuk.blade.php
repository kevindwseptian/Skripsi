@extends('layout.template')

@section("content")
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Receiving</h3>
        </div>
        <!-- /.box-'header -->
        <div class="box-body">
        <!-- form start -->
        <form role="form" method="POST" action="{{route('admin.receiving.store')}}">
            @csrf
            {{-- <div class="box-body"> --}}
                <div class="form-group">
                    <label for="exampleInputPassword1">Waktu Pembelian</label>
                    <input type="date" class="form-control" id="waktu" placeholder="waktu" name="waktu">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Kode Transaksi </label>
                    <input type="Text" class="form-control" id="idtransaksi" placeholder="id transaksi"
                        name="idtransaksi">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Sumber </label>
                    <input type="Text" class="form-control" id="sumber" placeholder="sumber"
                        name="sumber">
                </div>

                <div style="display:flex; gap:20px;">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Gas 3 Kg </label>
                        <input type="Text" class="form-control" id="gas3kg" value="gas3kg"
                            name="gas[]" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Qty </label>
                        <input type="Number" class="form-control" id="qty3kg" placeholder="qty" name="qty[]">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga </label>
                        <input type="Text" class="form-control" id="harga3kg" placeholder="harga" name="harga[]" value="10000" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Total </label>
                        <input type="Text" class="form-control" id="total3kg" name="total[]" readonly>
                    </div>

                </div>
                <div style="display:flex; gap:20px;">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Gas 12 Kg </label>
                        <input type="Text" class="form-control" id="gas12kg" readonly value="gas12kg" name="gas[]]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Qty </label>
                        <input type="Number" class="form-control" id="qty12kg" placeholder="qty" name="qty[]">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga </label>
                        <input type="Text" class="form-control" id="harga12kg" placeholder="harga" name="harga[]" value="90000" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Total </label>
                        <input type="Text" class="form-control" id="total12kg" name="total[]" readonly>
                    </div>

                </div>

                <div style="display:flex; gap:20px;">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Gas 50 Kg </label>
                        <input type="Text" class="form-control" id="gas50kg" readonly value="gas50kg"
                            name="gas[]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Qty </label>
                        <input type="Number" class="form-control" id="qty50kg" placeholder="qty" name="qty[]">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga </label>
                        <input type="Text" class="form-control" id="harga50kg" placeholder="harga" name="harga[]" value="600000" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Total </label>
                        <input type="Text" class="form-control" id="total50kg" name="total[]" readonly>
                    </div>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Grand Total </label>
                    <input type="number" class="form-control" id="grandtotal" placeholder="total" name="grandtotal" readonly>
                </div>


                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
</section>
@endsection

@section('customScript')
    <script type="text/javascript">
        $(document).ready(function(){

            let qty3kg = 0;
            let qty12kg = 0;
            let qty50kg = 0;

            let price3kg = 10000;
            let price12kg = 90000;
            let price50kg = 600000;

            let grandtotal = 0;

            $('#qty3kg').val(qty3kg);
            $('#qty12kg').val(qty12kg);
            $('#qty50kg').val(qty50kg);

            $('#qty3kg, #qty12kg, #qty50kg').on('change',function(){
                qty3kg = $('#qty3kg').val();
                qty12kg = $('#qty12kg').val();
                qty50kg = $('#qty50kg').val();

                let total3kg = qty3kg*price3kg;
                let total12kg = qty12kg*price12kg;
                let total50kg = qty50kg*price50kg;

                $('#total3kg').val(total3kg);
                $('#total12kg').val(total12kg);
                $('#total50kg').val(total50kg);

                grandtotal = total3kg+total12kg+total50kg;

                $('#grandtotal').val(grandtotal);

            });

        });
    </script>
@endsection
