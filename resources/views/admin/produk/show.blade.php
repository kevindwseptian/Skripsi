@foreach ($dataTransaksi as $transaksi)
    <table class="table" name="detailTransaksi">
        <tr>
            <th>Kode Transaksi</th>
            <td>:</td>
            <td>{{ $transaksi->kodetransaksi }}</td>
        </tr>
        <tr>
            <th>Waktu Pembelian</th>
            <td>:</td>
            <td>{{ $transaksi->waktupembelian}}</td>
        </tr>
        <tr>
            <th>Sumber</th>
            <td>:</td>
            <td>{{ $transaksi->sumber}}</td>
        </tr>
    </table>

    <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Qty</th>
            <th>Harga</th>
        </tr>
        @foreach ($datadetailTransaksi as $dt => $detailTransaksi)
        <tr>
            <td>{{ ++$dt }}</td>
            <td>{{ $detailTransaksi->jenis}}</td>
            <td>{{ $detailTransaksi->qty}}</td>
            <td>{{ $detailTransaksi->harga}}</td>
            @php
                $gt = 0;
            @endphp
        </tr>
        @endforeach

        <tr>
            <td colspan="3"><strong>Grand Total</strong></td>
            <td>Rp. {{ $transaksi->totaltransaksi }}</td>
        </tr>
    </table>
@endforeach
