<!DOCTYPE html>
<html>
<head>
    <style>
        /* CSS Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .transaksi-box {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .transaksi-box h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .transaksi-box h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .transaksi-box table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .transaksi-box th, .transaksi-box td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .transaksi-box th {
            background-color: #f2f2f2;
        }

        .transaksi-box .total-pendapatan {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="transaksi-box">
        <h1>Laporan Hasil Penjualan</h1>
        <h3>Diabeart Wellness</h3>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Invoice</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Harga</th>
                    <th>Metode Pembayaran</th>
                    <th>Nama Customer</th>
                    <th>Alamat Customer</th>
                    <th>Status</th>
                    <th>Barang Dibeli</th>
                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                @foreach($transaksi as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->invoice }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>Rp {{ $item->total }}</td>
                        <td>{{ $item->metode_pembayaran }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->user->alamat }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            @foreach ($item->keranjang as $items)
                                {{ $items->produk->nama }}({{ $items->jumlah }}),
                            @endforeach
                        </td>
                        <!-- Tambahkan item kolom lain sesuai kebutuhan -->
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="total-pendapatan">
            <strong>Total Pendapatan (Transaksi dengan status done): Rp </strong> {{ $totalPendapatan }}
        </div>

        <!-- Tambahkan elemen lainnya, seperti total pendapatan, grafik, dll. -->
    </div>
</body>
</html>
